<?php
require_once ("../Config/Connection.php");

Class ModelMainQuery Extends Connection{
    static public $_ConnectionBD;

    public function __construct(){
        self::BDConnection();     
    }

    public function BDConnection(){
        $ConnectObj= new Connection();
        self::$_ConnectionBD=$ConnectObj->initialize();
    }

    public function MMQTypeCarsQuery(){
        $sql="SELECT id AS id
                    ,descripcion AS descripcion
              FROM tipo_vehiculo;";
        $result=self::$_ConnectionBD->query($sql);
        return $result;
    }

    public function MMQTypeUserQuery(){
        $sql="SELECT id AS id
                    ,descripcion AS descripcion
              FROM rol;";
        $result=self::$_ConnectionBD->query($sql);
        return $result;
    }

    public function MMQDatatableInfo(){
        $sql="SELECT * FROM users;";
        $result=self::$_ConnectionBD->query($sql);
        return $result;
    }

    public function MMQinfoPerson($params){
        $sql="SELECT * FROM users WHERE numero_cedula=".$params['id'].";";
        echo $sql;
        $result=self::$_ConnectionBD->query($sql);
        return $result;
    }

    public function MMQinfoCar($params){
        $sql="SELECT * FROM vehiculo WHERE placa=".$params['id'].";";
        $result=self::$_ConnectionBD->query($sql);
        return $result;
    }
}


?>