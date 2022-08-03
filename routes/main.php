<?php

/*
 * Main file for creating a routing map.
 * The routes change when the files in this folder are changed. If there is a time difference between the servers,
 * you must execute "php console -routes-cc" or delete the cached "routes.txt" file after making the changes.
 *
 * Основной файл для создания карты маршрутизации.
 * Маршруты перерасчитываются при изменении файлов в этой папке. Если есть разница во времени между серверами, необходимо выполнить
 * «php console -routes-cc» или удалить кешированный файл «routes.txt» после внесения изменений.
 */

Route::get("/", view("default"));

///////// v1

Route::get("/api/v1/")->controller('APIController@index');
Route::get("/api/v1/get_unix_time/get_mysql_time")->controller('APIController@index');

Route::get("/api/v1/get_mysql_time")->controller('APIController@getMySQLTime');
Route::get("/api/v1/get_unix_time")->controller('APIController@getUNIXTime');


///////// v2

Route::get('/api/v2/{method}/')->controller('APIController@get<method>');
//http://hleb/api/v2/mysqltime/
//http://hleb/api/v2/unixtime/



///////// v3  можно вызывать методы в разной последовательности, главное указать имя метода
Route::get("/api/v3/{param1}/{param2?}/")->controller('APIController@index_v3');
//hleb/api/v3/MySQLTime/
//hleb/api/v3/UNIXTime
//http://hleb/api/v3/UNIXTime/MySQLTime/
//http://hleb/api/v3/MySQLTime/UNIXTime/



////////