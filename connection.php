<?php

// Подключаемся к БД.
if (!isset($db)){
$db = DbSimple_Generic::connect('mysqli://test:123@localhost/test');
$db->query("SET NAMES utf8");
}
// Устанавливаем обработчик ошибок.
$db->setErrorHandler('databaseErrorHandler');
$db->setLogger('myLogger');

