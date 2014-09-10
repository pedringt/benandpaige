<?php

if ($_SERVER['REQUEST_URI'] == '/about') {
    include 'about.php';
}

if ($_SERVER['REQUEST_URI'] == '/party') {
    include 'party.php';
}

if ($_SERVER['REQUEST_URI'] == '/rsvp') {
    include 'rsvp.php';
}

if ($_SERVER['REQUEST_URI'] == '/index' {
	include 'index.php';
}


?>