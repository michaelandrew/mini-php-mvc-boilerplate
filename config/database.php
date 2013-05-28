<?php

if (APPLICATION_ENV == 'DEVELOPMENT') {
	require 'database/development.php';
} else {
	require 'database/production.php';
}