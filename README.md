## Installation
Install package using composer
```sh
composer config minimum-stability dev
composer require emico/tweakwise-export
```

Install package using zip file
```sh
Extract tweakwise-export.zip src folder to app/code/Emico/TweakwiseExport/
```

Run installers
```sh
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## Configuration
When the extension is installed it is disabled by default. There are three different parts which can be enabled separately. Configuration can be found at Stores -> Configuration -> Catalog -> Tweakwise.

## Events
Currently there are no events documented, this will be done in the coming version(s).