<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		include __DIR__.'/../pages/'.$_GET['page'].'.php';

	};
};

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
};

function getUserData(){
	$file = file_get_contents(__DIR__.'/../data/user.json');
	echo $file;

};
 	
