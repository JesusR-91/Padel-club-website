<?php
//DATABASE CONNECTION
$db = mysqli_connect('localhost', 'root','', 'padel_club');

//CONSULT TO CONFIGURE CHARACTER CODIFICATION (include 'ñ' or accents)
mysqli_query($db, "SET NAMES 'utf8'");

// SESSION INIT
session_start();