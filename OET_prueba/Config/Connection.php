<?php 
require_once ("../Model/EntityObject/ConnectionObject.php");

Class Connection Extends ConnectionObject{
    public $hostdir;
    public $username;
    public $pass;
    public $db;

    public function __construct(){
        $this->hostdir=base64_decode(ConnectionObject::$host);
        $this->username=base64_decode(ConnectionObject::$user);
		$this->pass=ConnectionObject::$password;
		$this->db=base64_decode(ConnectionObject::$database);
    }
    public function Connect(){
		try{
			$connect=mysqli_connect( $this->hostdir,$this->username,$this->pass,$this->db) or die ("Error en la conexion");
			return $connect;
		}
		catch (Error $e){
			$e->getMessage();
		}
	}

    public function initialize(){
        return self::Connect();
    }
}
 ?>