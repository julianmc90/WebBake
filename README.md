# WebBake plugin for CakePHP

This is the web based console for CakePhp3, it makes easier the tasks to bake Controllers, Models, Templates and for baking other things like Components, Plugins Helpers and more...

## Requirements

* CakePHP 3.0+


## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require julianmc90/webbake:dev-master@dev
```


When instalation ends put this lines at the end of ```config/bootstrap.php```

```php
Plugin::load('WebBake', ['bootstrap' => false, 'routes' => true]);

Configure::write('WebBakeEnabled','true');
```

## How to use
Into your project main go to ```/web-bake/bake```
Example:
```
proyect-name/web-bake/bake
```
<img src="https://github.com/julianmc90/webbake/blob/master/webroot/img/screenshot.png" width="80%" /> 
