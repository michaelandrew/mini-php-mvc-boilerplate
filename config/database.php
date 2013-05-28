<?php

if (APPLICATION_ENV == 'DEVELOPMENT') {
	require DB.'/development.php';
} else {
	require DB.'/production.php';
}