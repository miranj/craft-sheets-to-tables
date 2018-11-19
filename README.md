# Sheets to Tables plugin for Craft CMS 3.x

A Twig function to convert Spreadsheets into HTML tables.


## Requirements

This plugin requires Craft CMS 3.0 or later.

## Installation

You can install this plugin from the [Plugin Store][ps] or with Composer.

[ps]:https://plugins.craftcms.com/

#### From the Plugin Store
Go to the Plugin Store in your project’s Control Panel and search for “Sheets to Tables”.
Then click on the “Install” button in its modal window.

#### Using Composer
Open your terminal and run the following commands:

    # go to the project directory
    cd /path/to/project
    
    # tell composer to use the plugin
    composer require miranj/craft-sheets-to-tables
    
    # tell Craft to install the plugin
    ./craft install/plugin sheets-to-tables

## Usage

To convert a spreadsheet file into an HTML `<table>`, pass an [craft\elements\Asset][asset] object as an argument to the `sheetstotables( asset )` Twig function.

[asset]:https://docs.craftcms.com/api/v3/craft-elements-asset.html

```twig
{% set spreadsheet = craft.assets.kind('excel').one() %}

{{ sheetstotables(spreadsheet) }}

```

If the spreadsheet file contains multiple sheets, only the contents of the first sheet will be rendered as a table.

### Supported file formats
- CSV
- Excel (.xlsx, .xls)
- Open Document Format (.ods)
- [Other formats supported by PhpSpreadsheet](https://phpspreadsheet.readthedocs.io/en/develop/)

---

Brought to you by [Miranj](https://miranj.in/)
