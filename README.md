# itunes-search
A simple PHP class for searching iTunes.

## Example

```php
include('iTunes.php');

$iTunes = new iTunes();

$result = $iTunes->search(array(
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
$result = $iTunes->lookup(array(
    'id' => '159260351'  
);

foreach ($result->results as $data) {
    echo $data->artistName;
    echo $data->primaryGenreName;
}
```

Movie search example

```php
$result = $iTunes->search(array(
    'term' => 'Mad Max',
    'media' => 'movie'
));

foreach ($result->results as $data){
    echo $data->collectionName;
    echo $data->longDescription;
}
```


