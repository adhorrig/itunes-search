# itunes-search
A simple PHP class for searching iTunes Store data. 

Read iTunes search documentation here:

https://www.apple.com/itunes/affiliates/resources/documentation/itunes-store-web-service-search-api.html

## Install

Install via Terminal:

```
composer require anthonybloomer/itunes-search=dev-master
```

Or update your composer.json file:

```
{
    "require": {
        "anthonybloomer/itunes-search": "dev-master"
    }
}
```

## Example

```php
require_once __DIR__ . '/vendor/autoload.php';

use iTunesSearch\iTunes;

$result = iTunes::search(array(
    'term' => 'Taylor Swift',
    'media' => 'music'
));

foreach ($result->results as $data) {
  echo $data->artistName;
  echo $data->trackName;
  echo $data->collectionName;
}
            
```
You can also lookup data by specific ID. 

```php 
$result = iTunes::lookup(array(
    'id' => '159260351'  
);

foreach ($result->results as $data) {
    echo $data->artistName;
    echo $data->primaryGenreName;
}
```

Movie search example

```php
$result = iTunes::search(array(
    'term' => 'Mad Max',
    'media' => 'movie'
));

foreach ($result->results as $data){
    echo $data->collectionName;
    echo $data->longDescription;
}
```


