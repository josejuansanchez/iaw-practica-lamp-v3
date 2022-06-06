<?php

class Database{
    const DB_HOST = "mysql";
    const DB_NAME = "lamp_db";
    const DB_USER = "lamp_user";
    const DB_PASSWORD = "lamp_password";

	public static function connect(){
		$db = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

?>