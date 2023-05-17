<?php
$pdo = new PDO('mysql:dbname=cocoi;host=localhost', 'root', 'Nayef2021@');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);