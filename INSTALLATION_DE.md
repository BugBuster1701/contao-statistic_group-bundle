# Installation von Contao 4 Statistic Group - Bundle

Es gibt zwei Arten der Installation.

* mit dem Contao-Manger, nur für die Contao Managed-Editon
* über die Kommandozeile, für Contao Standard-Edition und Managed-Editon


## Installation über Contao-Manager

* Suche das Paket: `bugbuster/contao-statistic_group-bundle`
* Installation der Erweiterung


## Installation über die Kommandozeile

### Installation in einer Contao Managed-Edition

Installation in einer Composer-basierenden Contao 4.3+ Managed-Edition:

* `composer require "bugbuster/contao-statistic_group-bundle"`


### Installation in einer Contao Standard-Edition

Installation in einer Composer-basierenden Contao 4.2+ Standard-Edition:

* `composer require "bugbuster/contao-statistic_group-bundle"`

Einfügen in `app/AppKernel.php` folgende Zeile am Ende des Array `$bundles`:

`new BugBuster\StatisticsGroupBundle\BugBusterStatisticsGroupBundle(),`

Cache leeren und neu anlegen lassen:

* `bin/console cache:clear --env=prod --no-warmup`
* `bin/console cache:warmup --env=prod`

