<?php
define('BASE_URL', '/PW2023_223040093/kuliah/pertemuan9/index.php');
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
};
function uriIs($uri) {
    return ($_SERVER["REQUEST_URI"] === $BASE_URL . $uri) ? 'active' : '';
};
?>