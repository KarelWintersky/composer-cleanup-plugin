<?php

namespace KarelWintersky\Composer;

/**
 *
 * Class Rules
 * @package KarelWintersky\Composer
 */
class Rules
{
    /**
     * get rules list
     *
     * @return array
     */
    public static function getRules()
    {
        // Default patterns for common files
        $docs = [
            'LICENSE',
            'LICENSE.*',
            'license',
            'license.*',
            'COPYING',
            'CONTRIBUTING*',
            'CHANGES*',
            'CHANGELOG*',
            'demo',
            'doc',
            'docs',
            'example',
            'examples',
            'FAQ*',
            'HISTORY*',
            'package*',
            'phpcs.xml',
            'phpunit.php',
            'phpunit.xml*',
            'README*',
            'readme*',
            'test',
            'Test',
            'tests',
            'Tests',
            'travis',
            'UPGRADE*',
            'UPGRADING*',
            'Vagrantfile',
            '.git',
            '.gitattributes',
            '.gitignore',
            '.github',
            '.php_cs',
            '.scrutinizer.yml',
            '.styleci.yml',
            '.travis.yml'
        ];

        $additional_rules = [
            "adbario/php-dot-notation"              =>  '',
            "agelxnash/jevix"                       =>  '',

            "anahkiasen/former"                     =>  '',
            "anahkiasen/html-object"                =>  '',
            "anahkiasen/rocketeer"                  =>  '',
            "anahkiasen/underscore-php"             =>  '',

            "barryvdh/composer-cleanup-plugin"      =>  '',
            "barryvdh/laravel-debugbar"             =>  '',
            "barryvdh/laravel-ide-helper"           =>  '',

            "behat/gherkin"                         =>  '',

            "bjeavons/zxcvbn-php"                   =>  '',
            "bllim/datatables"                      =>  '',

            "bower-asset/punycode"                  =>  '',
            "bower-asset/jplayer"                   =>  'artwork',
            "bower-asset/bootstrap"                 =>  '',
            "bower-asset/bluebird"                  =>  'benchmark',
            "bower-asset/jquery-color"              =>  '',
            "bower-asset/select2"                   =>  '',
            "bower-asset/yii2-pjax"                 =>  '',
            "bower-asset/blueimp-load-image"        =>  '',
            "bower-asset/select2-bootstrap-theme"   =>  '',
            "bower-asset/typeahead.js"              =>  '',
            "bower-asset/blueimp-tpl"               =>  '',
            "bower-asset/blueimp-canvas-to-blob"    =>  '',
            "bower-asset/html5shiv"                 =>  '',
            "bower-asset/jquery-nicescroll"         =>  'demo',
    
            "cakephp/chronos"                       =>  'Dockerfile docs.Dockerfile',
            "cartalyst/sentry"                      =>  '',
            "cebe/markdown"                         =>  '',
            "cebe/markdown-latex"                   =>  '',
            "cebe/js-search"                        =>  '',
            
            "cmfcmf/openweathermap-php-api"         =>  'composer.* Examples',

            "codeception/codeception"               =>  '',
            "codeception/specify"                   =>  '',
            "codeception/stub"                      =>  '',
            "codeception/verify"                    =>  '',

            "cedric/css-tidy"                       =>  'Docs testing',

            "container-interop/container-interop"   =>  '',

            "classpreloader/classpreloader"         =>  '',
            "cssjanus/cssjanus"                     =>  "APACHE-LICENSE-2.0.txt ",

            "curl/curl"                             =>  '.gitlab-ci.yml',

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

            "easmith/selectel-storage"              =>  'example.php',
            "ezyang/htmlpurifier"                   =>  '',

            "filp/whoops"                           =>  '',
            "foolz/sphinxql-query-builder"          =>  'docs tests',
            "fzaninotto/faker"                      =>  '',
            
            "ganlvtech/kcaptcha"                    =>  'demos',

            "google/recaptcha"                      =>  '',

            "gumlet/php-image-resize"               =>  '',

            "guzzle/guzzle"                         =>  '',
            "guzzlehttp/guzzle"                     =>  '',
            "guzzlehttp/oauth-subscriber"           =>  '',
            "guzzlehttp/streams"                    =>  '',

            "hamcrest/hamcrest-php"                 =>  ".coveralls.yml .gush.yml composer.lock TODO.txt ",

            "imagine/imagine"                       =>  "lib/Imagine/Test",
            "intervention/image"                    =>  "public",
            "ircmaxell/password-compat"             =>  '',
            "imangazaliev/didom"                    =>  'composer.lock ',

            "jakub-onderka/php-console-color"       =>  "build.xml example.php",
            "jakub-onderka/php-console-highlighter" =>  "build.xml",
            "jakub-onderka/php-parallel-lint"       =>  "appveyor.yml ",
            "jasonlewis/basset"                     =>  '',
            "jeremeamia/SuperClosure"               =>  "demo",
            "jetbrains/phpstorm-stubs"              =>  ".idea",
            "justinrainbow/json-schema"             =>  "demo .php_cs.dist",

            "kriswallsmith/assetic"                 =>  '',

            "laravel/framework"                     =>  "build",
            "leafo/lessphp"                         =>  "Makefile package.sh",
            "league/flysystem"                      =>  '',
            "league/stack-robots"                   =>  '',
            "liuggio/statsd-php-client"             =>  '',

            "longman/telegram-bot"                  =>  'doc tests .github',

            "maximebf/debugbar"                     =>  "demo",
            "mccool/laravel-auto-presenter"         =>  '',
            "mediawiki/mediawiki-codesniffer"       =>  "COPYRIGHT",
            
            "mk-j/php_xlsxwriter"                   =>  'composer.lock example*.* examples testbench',

            "mobiledetect/mobiledetectlib"          =>  'docs docker-compose.yml',
            "mockery/mockery"                       =>  '',
            "monolog/monolog"                       =>  'phpstan.neon.dist',

            "mrclay/minify"                         =>  "MIN.txt min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php",
            "mrclay/jsmin-php"                      =>  "",

            "mtdowling/cron-expression"             =>  '',
            "mustache/mustache"                     =>  "bin",
            "myclabs/deep-copy"                     =>  "fixtures",

            "nesbot/carbon"                         =>  '',
            "nette/mail"                            =>  'contributing.md readme.md',
            "nette/utils"                           =>  'contributing.md readme.md .phpstorm.meta.php',
            "nikic/php-parser"                      =>  "test_old",
            "nikic/fast-route"                      =>  "test psalm.xml FastRoute.hhi .hhconfig",

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
            "phpoffice/phpspreadsheet"              =>  "samples",

            "php-curl-class/php-curl-class"         =>  '',
            "phpseclib/phpseclib"                   =>  "build",
            "phpspec/prophecy"                      =>  "CHANGES.md",
    
            "phpoption/phpoption"                   =>  'Makefile',

            "phpunit/php-code-coverage"             =>  ".github build.xml ChangeLog-*.md ",
            "phpunit/php-file-iterator"             =>  "ChangeLog.md ",
            "phpunit/php-text-template"             =>  '',
            "phpunit/php-timer"                     =>  '',
            "phpunit/php-token-stream"              =>  '',
            "phpunit/phpunit"                       =>  ".editorconfig .php_cs.dist appveyor.yml ChangeLog-*.md ",
            "phpunit/phpunit-mock-objects"          =>  "",

            "predis/predis"                         =>  "bin package.ini",
            "psr/log"                               =>  ".gitignore",
            "psy/psysh"                             =>  ".editorconfig ",
    
            "ralouphie/mimey"                       =>  '.codeclimate.yml bin mime.types mime.types.custom generate tests',
            "rcrowe/twigbridge"                     =>  '',
            "robmorgan/phinx"                       =>  'UPGRADE_*',

            "sabre/event"                           =>  '.php_cs.dist bin phpstan.neon',

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
    
            "skyzyx/mimetypes"                      =>  'customize.json generate template.twig',
            
            "smarty/smarty"                         =>  "*.txt demo",
            
            "spatie/regex"                          =>  ".editorconfig CHANGELOG.md CONTRIBUTING.md README.md",
            
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
            "symfony/var-dumper"                    =>  'Test Tests',
            "symfony/yaml"                          =>  '',

            "theseer/tokenizer"                     =>  "phive.xml",
            "tijsverkoyen/css-to-inline-styles"     =>  '',
            "true/punycode"                         =>  '',
            "twig/twig"                             =>  '',

            "venturecraft/revisionable"             =>  '',
            "vlucas/phpdotenv"                      =>  '',

            "webmozart/assert"                      =>  ".composer-auth.json ",

            "wikimedia/assert"                      =>  '',
            "wikimedia/at-ease"                     =>  '',
            "wikimedia/avro"                        =>  "NOTICE.txt",
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
                $docs
            ];
            if (trim( $custom_rule ) !== '') {
                $final_rules[ $package_name ][] = $custom_rule;
            }
        }

        return $final_rules;
    }

}
