<?php

class Database {
	private static $DB_HOST;
	private static $DB_NAME;
	private static $DB_USER;
	private static $DB_PASSWORD;

	public static function init() {
		self::$DB_HOST = getenv('DB_HOST');
		self::$DB_NAME = getenv('DB_NAME');
		self::$DB_USER = getenv('DB_USER');
		self::$DB_PASSWORD = getenv('DB_PASSWORD');
	}

	public static function connect() {
		self::init();
		$db = new mysqli(self::$DB_HOST, self::$DB_USER, self::$DB_PASSWORD, self::$DB_NAME);
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

?>