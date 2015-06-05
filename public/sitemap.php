<?php
include __DIR__ . '/../src/init.php';

use Q\Core\Templator;
use Q\Megatokyo\Strip;

$ids = range(1, Strip::max());

header('Content-Type: text/xml; charset=utf-8');

echo Templator::render('sitemap.twig', [
    'ids' => $ids,
]);