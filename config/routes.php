<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function(){
   echo "OK";
});
Macaw::get('index', "HomeController@index");

// 404 错误页
Macaw::$error_callback = function() {
   throw new Exception("路由无匹配项 404 Not Found");
};
Macaw::dispatch();