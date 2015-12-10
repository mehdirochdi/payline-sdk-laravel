## Payline PHP SDK Laravel 5.1 ##

### Installation ###

Add Scafold to your composer.json file to require Scafold :
```
    require : {
        "laravel/framework": "5.1.*",
        "rochdi/payline": "dev-master"
    }
```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to config/app.php :
```
    Rochdi\Payline\PaylineServiceProvider::class,
```

### Publish ###

The last required step is to publish configuration file payline.php in repository config with :
```
    php artisan vendor:publish
```

Congratulations, you have successfully installed payline !