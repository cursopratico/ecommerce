<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

    $sql = new Hcode\DB\Sql();

    $results = $sql->select("SELECT * FROM tb_user");

    echo json_encode($results);

    //echo "OK";
});

$app->run();
?>