# Scraping Star Wars

This library scrap data from the site "https://www.starwars-holonet.com/encyclopedie/liste-personnages.html".

## Local development

```bash
    composer install
```

```bash
    php vendor/bin/phpstan analyse src --level=max
```

## Use Scraping function

Use "new Scrap" and the function getStarWarsCharacters().

This will return an array of string with Star Wars characters names.

```php
$scrap = new Scrap();

$data = $scrap->getStarWarsCharacters();
```