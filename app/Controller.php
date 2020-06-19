<?php

namespace App;

use PDO;

class Controller {

	protected object $db;

	public function __construct() {

		try{
			$this->db = new PDO ("mysql:host=localhost;dbname=dbtugas1blog", "root","");
			
		} catch (PDOException $e) {
			
			die ("erorr! " .$e->getMessage());
		}
	}
}