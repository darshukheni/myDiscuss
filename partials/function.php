<?php

class Contact {
	
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "mydiscussion";
	public $mysqli;

	public function __construct(){

		return $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
	}

	public function contact_us($data){

	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_number = $_POST['contact_phone'];
	$contact_desc = $_POST['contact_message'];
	$q = "insert into contact set contact_name='$contact_name', contact_email='$contact_email', contact_number='$contact_number', contact_desc='$contact_desc'";
	return $this->mysqli->query($q);
	}
}

?>