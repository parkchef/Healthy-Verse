<?php

require_once 'db_class.php';

date_default_timezone_set("Asia/Kuala_Lumpur");

DB::$dbName = 'healthy_verse';
DB::$user = 'root';
DB::$password = '';
DB::$host = '127.0.0.1';
DB::$error_handler = false;
DB::$throw_exception_on_error = true;


define("BASE_URL", "http://localhost:8080/healthy-verse/");
