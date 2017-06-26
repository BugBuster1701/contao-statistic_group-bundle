# Installation of Contao 4 Statistic Group - Bundle

There are two types of installation.

* with the Contao-Manger, only for Contao Managed-Editon
* via the command line, for Contao Standard-Edition and Managed-Editon


## Installation with Contao-Manager

* search for package: `bugbuster/contao-statistic_group-bundle`
* install the package


## Installation via command line

### Installation for Contao Managed-Edition

Installation in a Composer-based Contao 4.3+ Managed-Edition:

* `composer require "bugbuster/contao-statistic_group-bundle"`


### Installation for Contao Standard-Edition

Installation in a Composer-based Contao 4.2+ Standard-Edition

* `composer require "bugbuster/contao-statistic_group-bundle"`

Add in `app/AppKernel.php` following line at the end of the `$bundles` array.

`new BugBuster\StatisticsGroupBundle\BugBusterStatisticsGroupBundle(),`

Clears the cache and warms up an empty cache:

* `vendor/bin/contao-console cache:clear --env=prod`
* `vendor/bin/contao-console cache:warmup -e prod`

