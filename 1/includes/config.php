<?php
const BASE_PATH = __dir__;
// подключаем файл настроек, ВАЖНО! Ваш файл должен иметь другое расширение
const THEME_NAME = 'NewsFeed';
// уровень администраторских прав, важен для авторизации
const ADMIN_LEVEL = '2';
// путь к папке шаблонов 
define(THEME_ADDR, implode(DIRECTORY_SEPARATOR, [BASE_PATH, '..', 'themes', THEME_NAME, '']));
// путь к шаблону для внешней части
define(THEME_URI, 'http://'.$_SERVER['HTTP_HOST'].'/themes/'.THEME_NAME.'/');
