# otomaties-disable-plugin-installation
Disable plugin installation. Make sure to add this plugin as a mu-plugin.

## Installation

`composer require tombroucke/otomaties-disable-plugin-installation`

Add `Config::define('DISALLOW_FILE_MODS', false);` to `/config/environments/production.php`


Be carefull when deploying, because the plugins in your git repository could be out of date, so you need to update them accordingly or you could experience some problems caused by regression.
