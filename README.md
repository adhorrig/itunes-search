# itunes-search
A simple PHP class for searching iTunes.

## Example

```php
include('iTunes.php');

$iTunes = new iTunes();

$result = $iTunes->search(
    $term = 'Taylor Swift',
    $media = 'music',
    $limit = 10
);

foreach ($result['results'] as $data) {
  echo $data['artistName'];
  echo $data['trackName'];
  echo $data['collectionName'];
}
            
```
You can also lookup data by specific ID. 

```php 
$result = $iTunes->lookup(159260351);

foreach ($result['results'] as $data) {
    echo $data['artistName'];
    echo $data['primaryGenreName'];
}
```
