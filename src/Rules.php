<?php

namespace KarelWintersky\Composer;

/**
 *
 * Class Rules
 * @package KarelWintersky\Composer
 */
class Rules
{
    const VERSION = 1.1;

    /**
     * get rules list
     *
     * @return array
     */
    public static function getRules()
    {
        // Default patterns for common files
        $docs = 'LICENSE LICENSE.* COPYING CONTRIBUTING* CHANGELOG* FAQ* HISTORY* UPGRADING* UPGRADE* README* readme* doc docs';
        $docs.= 'package* demo example examples .gitignore .gitattributes';

        $tests = '.travis.yml travis .scrutinizer.yml phpunit.xml* phpunit.php phpcs.xml .php_cs test Test tests Tests';
        
        $additional_rules = [
            "anahkiasen/former"                     =>  '',
            "anahkiasen/html-object"                =>  '',
            "anahkiasen/rocketeer"                  =>  '',
            "anahkiasen/underscore-php"             =>  '',

            "barryvdh/composer-cleanup-plugin"      =>  ".git",
            "barryvdh/laravel-debugbar"             =>  '',
            "barryvdh/laravel-ide-helper"           =>  '',
            "bjeavons/zxcvbn-php"                   =>  '',
            "bllim/datatables"                      =>  '',

            "cartalyst/sentry"                      =>  '',
            "classpreloader/classpreloader"         =>  '',
            "cssjanus/cssjanus"                     =>  "APACHE-LICENSE-2.0.txt ",

            "d11wtq/boris"                          =>  '',
            "danielstjules/stringy"                 =>  '',
            "dflydev/markdown"                      =>  '',
            "dnoegel/php-xdg-base-dir"              =>  '',

            "doctrine/annotations"                  =>  "bin",
            "doctrine/cache"                        =>  "bin",
            "doctrine/collections"                  =>  '',
            "doctrine/common"                       =>  "bin lib/vendor",
            "doctrine/dbal"                         =>  "bin build* docs2 lib/vendor",
            "doctrine/inflector"                    =>  '',
            "doctrine/instantiator"                 =>  '',

            "dompdf/dompdf"                         =>  "www",

            "filp/whoops"                           =>  '',

            "google/recaptcha"                      =>  '',

            "guzzle/guzzle"                         =>  '',
            "guzzlehttp/guzzle"                     =>  '',
            "guzzlehttp/oauth-subscriber"           =>  '',
            "guzzlehttp/streams"                    =>  '',

            "hamcrest/hamcrest-php"                 =>  ".coveralls.yml .gush.yml composer.lock TODO.txt ",

            "imagine/imagine"                       =>  "lib/Imagine/Test",
            "intervention/image"                    =>  "public",
            "ircmaxell/password-compat"             =>  '',

            "jakub-onderka/php-console-color"       =>  "build.xml example.php",
            "jakub-onderka/php-console-highlighter" =>  "build.xml",
            "jakub-onderka/php-parallel-lint"       =>  "appveyor.yml ",
            "jasonlewis/basset"                     =>  '',
            "jeremeamia/SuperClosure"               =>  "demo",
            "jetbrains/phpstorm-stubs"              =>  ".idea .git",
            "justinrainbow/json-schema"             =>  "demo .php_cs.dist",

            "kriswallsmith/assetic"                 =>  '',

            "laravel/framework"                     =>  "build",
            "leafo/lessphp"                         =>  "Makefile package.sh",
            "league/flysystem"                      =>  '',
            "league/stack-robots"                   =>  '',
            "liuggio/statsd-php-client"             =>  '',

            "maximebf/debugbar"                     =>  "demo",
            "mccool/laravel-auto-presenter"         =>  '',
            "mediawiki/mediawiki-codesniffer"       =>  "COPYRIGHT",
            "mockery/mockery"                       =>  '',
            "monolog/monolog"                       =>  '',
            "mrclay/minify"                         =>  "MIN.txt min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php",
            "mtdowling/cron-expression"             =>  '',
            "mustache/mustache"                     =>  "bin",
            "myclabs/deep-copy"                     =>  "fixtures",

            "nesbot/carbon"                         =>  '',
            "nette/mail"                            =>  'contributing.md license.md readme.md',
            "nette/utils"                           =>  'contributing.md license.md readme.md',
            "nikic/php-parser"                      =>  "test_old",

            "oojs/oojs-ui"                          =>  "demos .mailmap .stylelintrc .eslintrc.json .rubocop_todo.yml AUTHORS.txt History.md LICENSE-MIT",
            "oyejorge/less.php"                     =>  '',

            "patchwork/utf8"                        =>  '',
            "pecee/simple-router"                   =>  '',

            "phar-io/manifest"                      =>  "phive.xml examples",
            "phar-io/version"                       =>  '',

            "phenx/php-font-lib"                    =>  '',

            "phpdocumentor/reflection-common"       =>  '',
            "phpdocumentor/reflection-docblock"     =>  "easy-coding-standard.neon .coveralls.yml",
            "phpdocumentor/type-resolver"           =>  '',

            "phpoffice/phpexcel"                    =>  "Examples unitTests changelog.txt",
            "php-curl-class/php-curl-class"         =>  '',
            "phpseclib/phpseclib"                   =>  "build",
            "phpspec/prophecy"                      =>  "CHANGES.md",

            "phpunit/php-code-coverage"             =>  ".github build.xml ChangeLog-*.md ",
            "phpunit/php-file-iterator"             =>  "ChangeLog.md ",
            "phpunit/php-text-template"             =>  '',
            "phpunit/php-timer"                     =>  '',
            "phpunit/php-token-stream"              =>  '',
            "phpunit/phpunit"                       =>  ".github .editorconfig .gitattributes .php_cs.dist appveyor.yml ChangeLog-*.md ",
            "phpunit/phpunit-mock-objects"          =>  ".github .gitattributes ",

            "predis/predis"                         =>  "bin package.ini",
            "psr/log"                               =>  ".gitignore",
            "psy/psysh"                             =>  ".editorconfig .styleci.yml ",

            "rcrowe/twigbridge"                     =>  '',
            "robmorgan/phinx"                       =>  'UPGRADE_*',

            "sebastian/code-unit-reverse-lookup"    =>  '',
            "sebastian/comparator"                  =>  '',
            "sebastian/diff"                        =>  '',
            "sebastian/environment"                 =>  '',
            "sebastian/exporter"                    =>  '',
            "sebastian/global-state"                =>  '',
            "sebastian/object-enumerator"           =>  '',
            "sebastian/object-reflector"            =>  '',
            "sebastian/recursion-context"           =>  '',
            "sebastian/resource-operations"         =>  '',
            "sebastian/version"                     =>  '',

            "simplepie/simplepie"                   =>  "build compatibility_test ROADMAP.md",
            "squizlabs/php_codesniffer"             =>  "licence.txt phpcs.xsd phpcs.xml.dist",
            "stack/builder"                         =>  '',
            "swiftmailer/swiftmailer"               =>  "build* notes test-suite create_pear_package.php",

            "symfony/browser-kit"                   =>  '',
            "symfony/class-loader"                  =>  '',
            "symfony/config"                        =>  '',
            "symfony/console"                       =>  '',
            "symfony/css-selector"                  =>  '',
            "symfony/debug"                         =>  '',
            "symfony/dom-crawler"                   =>  '',
            "symfony/event-dispatcher"              =>  '',
            "symfony/filesystem"                    =>  '',
            "symfony/finder"                        =>  '',
            "symfony/http-foundation"               =>  '',
            "symfony/http-kernel"                   =>  '',
            "symfony/polyfill-ctype"                =>  '',
            "symfony/polyfill-mbstring"             =>  '',
            "symfony/process"                       =>  '',
            "symfony/routing"                       =>  '',
            "symfony/security"                      =>  '',
            "symfony/security-core"                 =>  '',
            "symfony/translation"                   =>  '',
            "symfony/var-dumper"                    =>  '',
            "symfony/yaml"                          =>  '',

            "theseer/tokenizer"                     =>  "phive.xml",
            "tijsverkoyen/css-to-inline-styles"     =>  '',
            "twig/twig"                             =>  '',

            "venturecraft/revisionable"             =>  '',
            "vlucas/phpdotenv"                      =>  '',

            "webmozart/assert"                      =>  ".styleci.yml .composer-auth.json ",

            "wikimedia/assert"                      =>  '',
            "wikimedia/at-ease"                     =>  '',
            "wikimedia/avro"                        =>  "LICENSE.txt NOTICE.txt",
            "wikimedia/base-convert"                =>  ".editorconfig",
            "wikimedia/cdb"                         =>  '',
            "wikimedia/cldr-plural-rule-parser"     =>  '',
            "wikimedia/composer-merge-plugin"       =>  '',
            "wikimedia/html-formatter"              =>  '',
            "wikimedia/ip-set"                      =>  '',
            "wikimedia/object-factory"              =>  "CODE_OF_CONDUCT.md",
            "wikimedia/php-session-serializer"      =>  '',
            "wikimedia/purtle"                      =>  ".scrutinizer.yml RELEASE-NOTES.md",
            "wikimedia/relpath"                     =>  '',
            "wikimedia/remex-html"                  =>  "CREDITS",
            "wikimedia/running-stat"                =>  '',
            "wikimedia/scoped-callback"             =>  '',
            "wikimedia/testing-access-wrapper"      =>  '',
            "wikimedia/timestamp"                   =>  '',
            "wikimedia/utfnormal"                   =>  '',
            "wikimedia/wait-condition-loop"         =>  '',
            "wikimedia/wrappedstring"               =>  '',

            "willdurand/geocoder"                   =>  '',
            "wmde/hamcrest-html-matchers"           =>  ".editorconfig",

            "zordius/lightncandy"                   =>  ".scrutinizer.yml example_debug.png"
        ];

        $final_rules = [];

        foreach ($additional_rules as $package_name => $custom_rule) {
            $final_rules[ $package_name ] = [
                $docs,
                $tests
            ];
            if (strlen(trim($custom_rule))) array_push($final_rules[ $package_name ], $custom_rule);
        }

        return $final_rules;
    }

}
