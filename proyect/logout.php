<?php

session_start();


//DELETE SESSION
session_unset();

//RELOAD 
header('Location: index.php');