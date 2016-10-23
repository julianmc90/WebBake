# WebBake plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require julianmc90/webbake:dev-master@dev
```

## Installation

When instalation ends put this lines at the end of ```config/bootstrap.php```

```php
Plugin::load('WebBake', ['bootstrap' => false, 'routes' => true]);

Configure::write('WebBakeEnabled','true');
```