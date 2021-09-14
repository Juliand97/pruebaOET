<?php 

require_once("../Model/ModelMainQuery.php");
require_once("../Model/ModelMainUpdate.php");

Class ControllerMain{
    static public $_connectionModelQuery;
    static public $_connectionModelUpdate;
    static public $_callProcessFunction;
    static public $_dataRequest;

    public function __construct(){
         error_reporting(E_ALL);
          ini_set("display_errors", 1);
        self::initializeConnect();
    
       
    }

    public function initializeConnect(){
        self::$_connectionModelQuery=new ModelMainQuery();
        self::$_connectionModelUpdate=new ModelMainUpdate();
        if(isset($_SERVER["HTTP_HOST"])){
            if(isset($_POST) && !empty($_POST)){
                self::$_callProcessFunction=($_POST['functionMethod']);
                self::$_dataRequest=($_POST);
            }
            if(isset($_GET) && !empty($_GET)){
                self::$_callProcessFunction=($_GET['functionMethod']);
                self::$_dataRequest=($_GET);
            }
        }
    }

    public function callProcess(){
        $function= self::$_callProcessFunction;
        if(method_exists(get_class($this),$function)){
            $class= new ControllerMain;
            $class->$function();
        }
    }

    public function showResponse($response){
        echo  json_encode($response, JSON_FORCE_OBJECT);
        return json_encode($response);
    }

    public function typeCarSelect(){
        try {
            $resultQuery=self::$_connectionModelQuery->MMQTypeCarsQuery();
            $html="";
            if($resultQuery){
                if($resultQuery->num_rows > 0){
                    while($row=$resultQuery->fetch_assoc()){
                        $html.="<option value=".$row['id'].">".$row['descripcion']."</option>";
                    }
                }
            }
            return $html;

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function typeUser(){
        try {
            $resultQuery=self::$_connectionModelQuery->MMQTypeUserQuery();
            $html="";
            if($resultQuery){
                if($resultQuery->num_rows > 0){
                    while($row=$resultQuery->fetch_assoc()){
                        $html.="<option value=".$row['id'].">".$row['descripcion']."</option>";
                    }
                }
            }
            return $html;

        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function gridRow(){
        try {
            $resultQuery=self::$_connectionModelQuery->MMQDatatableInfo();
            $html="";
            if($resultQuery){
                if($resultQuery->num_rows > 0){
                    $html.="<tr>";
                    while($row=$resultQuery->fetch_assoc()){
                        $html.="<td>".$row['numero_cedula']."</td>";
                        $html.="<td>".$row['primer_nombre']."</td>";
                        $html.="<td>".$row['segundo_nombre']."</td>";
                        $html.="<td>".$row['apellido']."</td>";
                        $html.="<td>".$row['direccion']."</td>";
                        $html.="<td>".$row['telefono']."</td>";
                        $html.="<td>".$row['ciudad']."</td>";
           
                        $html.="</tr>";
                    }     
                }
            }
            return $html;

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function saveInfo(){
        try {
            $data=self::$_dataRequest;
            $iddoc=isset($data['iddoc']) ? $data['iddoc']:'';
            $fname=isset($data['name1']) ? $data['name1']:'';
            $sname=isset($data['name2']) ? $data['name2']:'';
            $lastname=isset($data['lastname']) ? $data['lastname']:'';
            $typeUser=isset($data['typeUser']) ? $data['typeUser']:'';
            $address=isset($data['address']) ? $data['address']:'';
            $email=isset($data['email']) ? $data['email']:'';
            $phone=isset($data['phone']) ? $data['phone']:'';

            $params=array();
            $params['numero_cedula']=(int)$iddoc;
            $params['primer_nombre']=$fname;
            $params['segundo_nombre']=$sname;
            $params['apellido']=$lastname;
            $params['direccion']=$address;
            $params['telefono']=(int)$phone;
           
            $resultInsert=self::$_connectionModelUpdate->MMUInsertUser($params);
            $response=array();
            if(!$resultInsert){
                $response['message']='problemas al guardar';
                $response['code']=false;
            }
            $response['message']='Datos Guardados Exitosamente';
            $response['code']=true;
    
            self::showResponse($response);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function saveInfoV(){
        try {
            $data=self::$_dataRequest;
            $placa=isset($data['placa']) ? $data['placa']:'';
            $color=isset($data['color']) ? $data['color']:'';
            $conductor=isset($data['conductor']) ? $data['conductor']:'';
            $propietario=isset($data['propietario']) ? $data['propietario']:'';
            $typeUser=isset($data['typeUser']) ? $data['typeUser']:'';
            $marca=isset($data['marca']) ? $data['marca']:'';
          
            $params=array();
            $params['placa']=$placa;
            $params['color']=$color;
            $params['conductor']=$conductor;
            $params['tipo_vehiculo']=$typeUser; 
            $params['propietario']=$propietario; 
            $params['marca']=$marca;
            
            $resultInsert=self::$_connectionModelUpdate->MMUInsertVehiculo($params);
            $response=array();
            if(!$resultInsert){
                $response['message']='problemas al guardar';
                $response['code']=false;
            }
            $response['message']='Datos Guardados Exitosamente';
            $response['code']=true;
    
            self::showResponse($response);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function searchPerson(){
        try {
            $id=isset($data['id']) ? $data['id']:'';
            var_dump($id);
            $params=array();
            $params['id']=$id;
            $resultQuery=self::$_connectionModelQuery->MMQinfoPerson($params);
            $html="";
            $response=array();
            $data=array();
            if($resultQuery){
                if($resultQuery->num_rows > 0){
                    while($row=$resultQuery->fetch_assoc()){
                        $data[]=$row;
                        
                    }
                }
            }
            
            $response['data']=$data;
            $response['code']=true;
    
            self::showResponse($response);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

$obj= new ControllerMain();
$obj->callProcess();
?>