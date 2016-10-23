# WebBake plugin for CakePHP

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