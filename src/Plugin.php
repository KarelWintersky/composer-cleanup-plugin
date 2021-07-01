<?php

namespace KarelWintersky\Composer;

use Composer\Composer;
use Composer\Installer\PackageEvent;
use Composer\Installer\PackageEvents;
use Composer\Plugin\PluginInterface;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Util\Filesystem;
use Composer\Package\BasePackage;

/**
 *
 *
 * Class CleanupPlugin
 * @package KarelWintersky\Composer
 */
class Plugin implements PluginInterface, EventSubscriberInterface
{
    const RELEASE_DATE = '2021-07-01';

    /**
     * @var \Composer\Composer $composer
     */
    protected $composer;

    /**
     * @var \Composer\IO\IOInterface $io
     */
    protected $io;

    /**
     * @var  \Composer\Config $config
     */
    protected $config;

    /**
     * @var \Composer\Util\Filesystem $filesystem
     */
    protected $filesystem;

    /**
     * @var array $rules
     */
    protected $rules;

    /**
     * {@inheritDoc}
     */

    /**
     *
     *
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
        $this->config = $composer->getConfig();
        $this->filesystem = new Filesystem();
        $this->rules = Rules::getRules();
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            PackageEvents::POST_PACKAGE_INSTALL => array(
                array('onPostPackageInstall', 0)
            ),
            PackageEvents::POST_PACKAGE_UPDATE => array(
                array('onPostPackageUpdate', 0)
            ),
        );
    }

    /**
     * Function to run after a package has been installed
     *
     * @param PackageEvent $event
     */
    public function onPostPackageInstall(PackageEvent $event)
    {
        /** @var \Composer\DependencyResolver\Operation\InstallOperation $operation */
        /** @var \Composer\Package\CompletePackage $package */

        $operation = $event->getOperation();
        $package = $operation->getPackage();

        $this->cleanPackage($package);
    }

    /**
     * Function to run after a package has been updated
     *
     * @param PackageEvent $event
     */
    public function onPostPackageUpdate(PackageEvent $event)
    {
        /** @var \Composer\Package\CompletePackage $package  */
        /** @var \Composer\DependencyResolver\Operation\UpdateOperation $operation */

        $operation = $event->getOperation();
        $package = $operation->getTargetPackage();

        $this->cleanPackage($package);
    }

    /**
     * Clean a package, based on its rules.
     *
     * @param BasePackage $package The package to clean
     * @return bool True if cleaned
     */
    protected function cleanPackage(BasePackage $package)
    {
        // Only clean 'dist' packages
        if ($package->getInstallationSource() !== 'dist') {
            return false;
        }

        $vendorDir = $this->config->get('vendor-dir');
        $targetDir = $package->getTargetDir();
        $packageName = $package->getPrettyName();
        $packageDir = $targetDir ? $packageName . '/' . $targetDir : $packageName;

        $package_clean_rules = isset($this->rules[$packageName]) ? $this->rules[$packageName] : null;

        if (!$package_clean_rules) {
            return false;
        }

        $dir = $this->filesystem->normalizePath(realpath($vendorDir . '/' . $packageDir));
        if (!is_dir($dir)) {
            return false;
        }
        
        foreach ((array)$package_clean_rules as $rules_section) {
            // Split each section of patterns to single globs
            $patterns
                = (is_string($rules_section))
                ? explode(' ', trim($rules_section))
                : $rules_section;
            

            foreach ($patterns as $pattern) {
                if (empty($pattern)) {
                    continue;
                }
                
                try {
                    foreach (glob($dir . '/' . $pattern) as $file) {
                        $this->filesystem->remove($file);
                    }
                } catch (\Exception $e) {
                    $this->io->write("Could not parse $packageDir ($pattern): " . $e->getMessage());
                }
            }
        }
        
        

        return true;
    }
    
    public function deactivate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement deactivate() method.
    }
    
    public function uninstall(Composer $composer, IOInterface $io)
    {
        // TODO: Implement uninstall() method.
    }
}
