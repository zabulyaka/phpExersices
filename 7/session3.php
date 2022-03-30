<?
session_start();
// Разрегистрировали переменную
unset($_SESSION['username']);

unset($_SESSION['browser']);
// Разрушаем сессию
session_destroy();
?>
