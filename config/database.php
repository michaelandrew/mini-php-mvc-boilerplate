<?php

if (APPLICATION_ENV == 'development') {
	require DB.'/development.php';
} else {
	require DB.'/production.php';
}