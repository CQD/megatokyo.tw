<?php
include __DIR__ . '/../src/init.php';

use Q\Core\Templator;
use Q\Megatokyo\Strip;

$path = $_SERVER['REQUEST_URI'];

$id = str_replace("/", "", str_replace('/strip', '', $path));

$strip = Strip::get($id);

if (!$strip) {
    $id = Strip::max();
    $strip = Strip::get($id);
}

$prev = Strip::get($id - 1);
$next = Strip::get($id + 1);

echo Templator::render('strip.twig', [
    'prev' => $prev,
    'strip' => $strip,
    'next' => $next,
]);