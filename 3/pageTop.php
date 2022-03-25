<?php
	echo '
		<!DOCTYPE HTML>
		<html>
 		<head>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>'.$title.'</title>
  		<style>
  			html, body, .container {
  				height:100%;
  				padding: 0;
  				margin: 0 auto;
  			}
  			h1 {
  				margin-top: 0;
  			}
		</style>
  		</head>
  		<body>
  			<div class="container" style="display:flex; flex-direction:column; justify-content:space-between">
	  			<div>
		  			<header style="background-color:red">
		  				<h1>'.$title.'</h1>
		  				<div class="header__menu">
		  					<a href="">Главная</a>
		  					<a href="">О нас</a>
		  					<a href="">Контакты</a>
						</div>
					</header>
					<main>
		'
?>