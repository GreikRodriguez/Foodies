<?php

namespace Medoo;

require 'Medoo.php';

$database = new Medoo([
    // [required]
    'type' => 'mysql',
    'host' => '201.202.107.8',
    'database' => 'db_recetas',
    'username' => 'foodis',
    'password' => 'adminfoodis.1',
]);
