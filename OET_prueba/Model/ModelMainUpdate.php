<?php
require_once ("../Config/Connection.php");

Class ModelMainUpdate Extends Connection{
    static public $_ConnectionBD;

    public function __construct(){
        self::BDConnection();     
    }

    public function BDConnection(){
        $ConnectObj= new Connection();
        self::$_ConnectionBD=$ConnectObj->initialize();
    }


    public function MMUInsertUser($params){
        $sql="INSERT INTO users (id
                            ,numero_cedula
                            ,primer_nombre
                            ,segundo_nombre
                            ,apellido
                            ,direccion
                            ,telefono) Values(0
                                        ,'{$params['numero_cedula']}'
                                        ,'{$params['primer_nombre']}'
                                        ,'{$params['segundo_nombre']}'
                                        ,'{$params['apellido']}'
                                        ,'{$params['direccion']}'
                                        ,'{$params['telefono']}'
                                       );";
      
        $result=self::$_ConnectionBD->query($sql);
       
    }

    public function MMUInsertVehiculo($params){
        $sql="INSERT INTO vehiculo (id
                            ,placa
                            ,color
                            ,marca
                            ,tipo_vehiculo
                            ,conductor
                            ,propietario) Values(0
                                        ,'{$params['placa']}'
                                        ,'{$params['color']}'
                                        ,'{$params['marca']}'
                                        ,'{$params['tipo_vehiculo']}'
                                        ,'{$params['conductor']}'
                                        ,'{$params['propietario']}'
                                       );";
      
        $result=self::$_ConnectionBD->query($sql);
       
    }
}


?>