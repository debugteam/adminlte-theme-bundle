## ThemeBundle for AdminLTE 3 Theme

https://adminlte.io/docs/3.2/

Thank you guys, for your great work! 

---

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require debugteam/adminlte-theme-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
        Debugteam\AdminLTEBundle\DebugteamAdminlteThemeBundle::class => ['all' => true],
];
```

---


### To use it you will need to add Assets manually

#### I recommend using yarn in your main symfony application

```console
$ yarn add admin-lte@^3.2
```



It didn't run correctly after installing. I had to monkey fix something in 2 scss files in node_modules.
Just listen to the error messages.
Hopefully by the time you use this the error is gone already

#### Then add this to your **app.scss**

```scss
@import '~admin-lte';
@import '~@fortawesome/fontawesome-free/css/all.css';
```

#### And this to your app.js

```javascript
// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
require('bootstrap');
require('admin-lte');
bsCustomFileInput.init();
import bsCustomFileInput from 'bs-custom-file-input';
// start the Stimulus application
import './bootstrap';
```

---

## How to use it

One way of using it is extending your projects base.html.twig

```
{% extends '@DebugteamAdminlteTheme/base.html.twig' %}
```

Dashboards [here](docs/Dashboards.md)

Navigations [here](docs/Navigations.md)


