<?php

class Hash {
	
	public static function create($algorithm, $data, $salt) {
		$context = hash_init($algorithm, HASH_HMAC, $salt);
		hash_update($context, $data);
		
		return hash_final($context);
	}
	
}