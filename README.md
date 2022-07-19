<img align="right" src="./src/icon.svg" width="100" height="100" alt="Sheets to Tables icon">

# Sheets to Tables

This [Craft CMS][] plugin adds a [Twig][] function to convert Spreadsheets into HTML tables.

[craft cms]:https://craftcms.com/
[twig]:http://twig.sensiolabs.org/



## Contents

- [Usage](#usage)
- [Installation](#installation)
- [Requirements](#requirements)
- [Changelog](./CHANGELOG.md)
- [License](./LICENSE.md)



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



## Installation

You can install this plugin from the [Plugin Store][ps] or with Composer.

[ps]:https://plugins.craftcms.com/sheets-to-tables

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
    ./craft plugin/install sheets-to-tables



## Requirements

This plugin requires Craft CMS 3 or 4.



---

Brought to you by [Miranj](https://miranj.in/)
