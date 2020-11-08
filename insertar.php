<?php
use Illuminate\Database\Capsule\Manager as DB;
require "vendor/autoload.php";
require 'config/database.php';

DB::table('Usuarios')->insert(['Usuarios' => $_POST["Sesion"]]);
echo 'usuario guardado';