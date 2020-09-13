<?php

require_once 'App/App.php';

use \App\App;

$dir = 'App/Models';
$files = scandir($dir);

for ($i = 0; $i < count($files); $i++) {
    if (!strpos($files[$i], 'php')) {
        unset($files[$i]);
    }
}

$files = array_values($files);

for ($i = 0; $i < count($files); $i++) {
    $temp = $files[$i];
    $files[$i] = $dir . '/' . $temp;
}

$randomClass = rand(0, count($files)-1);


$a = new App();
echo $a->getRandomClass($files[$randomClass]);














