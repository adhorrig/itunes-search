<?php

require_once __DIR__ . '/../vendor/autoload.php';

use iTunesSearch\iTunes as iTunes;

$result = iTunes::search(
    array(
    'term' => 'Taylor Swift',
    'media' => 'music'
));

?>
    <table>
        <tr>
            <th>Artist Name</th>
            <th>Track Name</th>
            <th>Album</th>
        </tr>

        <? foreach ($result->results as $data) : ?>
            <tr>
                <td> <?= $data->artistName ?> </td>
                <td> <?= $data->trackName ?> </td>
                <td> <?= $data->collectionName ?> </td>
            </tr>
        <? endforeach ?>

    </table>


<?

$result = iTunes::lookup(array(
    'id' => '159260351'
));

foreach ($result->results as $data) : ?>

    <h2><?= $data->artistName ?></h2>
    <p>Genre: <?= $data->primaryGenreName ?></p>

<? endforeach ?>
