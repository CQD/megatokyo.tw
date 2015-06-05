<?php
include __DIR__ . '/../src/init.php';

use Q\Core\Templator;
use Q\Megatokyo\Strip;

$strips = [];

$id = Strip::max();
while ($id > 0) {
	$strips[] = Strip::get($id);
	$id--;
}
echo Templator::render('atom.twig', [
    'strips' => $strips,
]);