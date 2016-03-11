# Contao 4.x Module, Grid-16-Columns

Adds a responsive 16-column pixel/percental grid with 1120px/1140px
in the layout css-framework of Contao 4.

![Layout CSS-Framework](https://raw.github.com/BugBuster1701/contao-grid_16-bundle/develop/src/Resources/contao/wiki/layout-css-framework.jpg)

**This Contao 4 extension is still in development.**
**Please do not install!**

<!--
remove alte develop4 version
vi app/AppKernel.php -> Zeilen löschen
composer remove bugbuster/contao_grid_16_columns

Installation in einer Composer basierten Contao 4.1 Installation
develop version
composer require "bugbuster/contao-grid_16-bundle:*@dev"

In app/AppKernel.php Zeile am Ende des $bundles Arrays hinzufügen.

new BugBuster\Grid16Bundle\BugBusterGrid16Bundle(),

app/console cache:clear --env=prod
app/console cache:warmup -e prod

-->
