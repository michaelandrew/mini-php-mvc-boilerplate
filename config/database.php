<?php

if (ENVIRONMENT == 'development') {
	require DB.'/development.php';
} else {
	require DB.'/production.php';
}