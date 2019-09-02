# Composer

+ https://www.binarycarpenter.com/quick-composer-tutorial-learn-composer-php-in-10-minutes/
+ https://thewebtier.com/php/psr4-autoloading-php-files-using-composer/

## Init
```bash
composer init
```

## Dependencies

```bash 
composer require monolog/monolog
```

OR

composer.json
```text
"require": {
        "monolog/monolog": "^1.24"
    }
```

## psr-4

```text
"autoload": {
    "psr-4": {
        "Service\\": "service/",
        "Core\\": "core/"
    }
}
```



