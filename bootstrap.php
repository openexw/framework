<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use \Whoops\Run;
define("BASE_PATH", __DIR__);

// 自动加载
require BASE_PATH."/vendor/autoload.php";

// Eloquent OR
$capsule = new Capsule;
$capsule->addConnection(require BASE_PATH.'/config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();