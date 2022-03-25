<?php
$title='Приветствие';
$author='Иван Иванов';

require_once("pageTop.php");
include_once("content.php");
include_once("content.php");//Мы не хотим чтобы контент случайно повторился, потэтому используем "_once"
require_once("pageBottom.php");

?>