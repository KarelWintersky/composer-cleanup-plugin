Composer Cleanup Plugin
=======================

Remove unnecessary files (mainly tests & documentation) from the vendor dir.

Based on [barryvdh's composer-cleanup-plugin](https://github.com/barryvdh/composer-cleanup-plugin)

Usually disk size shouldn't be a problem, but when you have to use FTP to deploy or have very limited disk space,
you can use this package to cut down the vendor directory by deleting files that aren't used in production (tests/docs etc).

> **Note:** This package is still experimental, usage in production is not recommended.
> In normal circumstances, you shouldn't care about disk space! Try deploying with SSH/Git instead.

## Install

Require this package in your composer.json:

      composer require karelwintersky/composer-cleanup-plugin

## Adding rules

Please submit a PR to [src/CleanupRules.php](https://github.com/barryvdh/composer-cleanup-plugin/blob/master/src/CleanupRules.php) to add more rules for packages.
Make sure you test them first, sometimes tests dirs are classmapped and will error when deleted.
