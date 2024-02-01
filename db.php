<?php

require_once __DIR__ . '/Models/Item.php';
require_once __DIR__ . '/Models/ItemFood.php';
require_once __DIR__ . '/Models/ItemAccessory.php';
require_once __DIR__ . '/Models/ItemGame.php';

$cane = new Category('cane');
$gatto = new Category('gatto');
$pesce = new Category('pesce');
$uccello = new Category('uccello');

$Products = [
    new ItemFood('Royal Canin', 'Mini Adult', 4.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'cibo', $cane),
    new ItemFood('Almo Nature', 'Holistic Maintenance Medium Large Tonno e Riso', 6, 'ttps://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'cibo', $cane),
    new ItemFood('Almo Nature', 'Cat Daily Lattina', 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'cibo', $cane),
    new ItemFood('Tetra', 'Mangime per Pesci Guppy in Fiocchi', 2.56, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'cibo', $pesce),
    new ItemAccessory('Voliera', 'Wilma in Legno', 78, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'gabbia', $uccello),
    new ItemAccessory('EasyCrystal', 'Cartucce Filtranti per Filtro ', 5.33, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'acquario', $pesce),
    new ItemGame('Kong', 'Kong Classic', 4.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'gioco', $cane),
    new ItemGame('Trixie', 'Topini di peluche', 2.55, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'gioco', $gatto),
];