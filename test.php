<?php

include('iTunes.php');

$iTunes = new iTunes();

$result = $iTunes->search(
    $term = 'Taylor Swift',
    $media = 'music',
    $limit = 10
);

?>
    <table>
        <tr>
            <th>Artist Name</th>
            <th>Track Name</th>
            <th>Album</th>
        </tr>

        <? foreach ($result['results'] as $data) : ?>
            <tr>
                <td> <? echo $data['artistName'] ?> </td>
                <td> <? echo $data['trackName'] ?> </td>
                <td> <? echo $data['collectionName'] ?> </td>
            </tr>
        <? endforeach ?>

    </table>


<?

$result = $iTunes->lookup(159260351);

foreach ($result['results'] as $data) : ?>

    <h2><? echo $data['artistName']; ?></h2>
    <p>Genre: <? echo $data['primaryGenreName']; ?></p>

<? endforeach ?>