# Contao 4.x Module, Grid-16-Columns

Adds a responsive 16-column pixel/percental grid with 1120px/1140px
in the layout css-framework of Contao 4.

![Layout CSS-Framework](https://raw.github.com/BugBuster1701/contao-grid_16-bundle/develop/src/Resources/contao/wiki/layout-css-framework.jpg)

**This Contao 4 extension is still in development.**


## Installation

Installation in einer Composer-basierten Contao 4.1 Installation

`composer require "bugbuster/contao-grid_16-bundle:0.1.*"`

In app/AppKernel.php folgende Zeile am Ende des $bundles Arrays hinzufügen.

`new BugBuster\Grid16Bundle\BugBusterGrid16Bundle(),`

Nun noch den Cache löschen und neu aufbauen:

`app/console cache:clear --env=prod`

`app/console cache:warmup -e prod`

<!--
## remove alte develop4 version
vi app/AppKernel.php -> Zeile löschen: 
   new ContaoModuleBundle('grid_16_columns', $this->getRootDir()),
composer remove bugbuster/contao_grid_16_columns

-->
