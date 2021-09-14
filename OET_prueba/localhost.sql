CREATE TABLE vehiculo (
    id INT AUTO_INCREMENT
    ,placa VARCHAR(8)
    ,color VARCHAR(100)
    ,marca VARCHAR(100)
    ,tipo_vehiculo ENUM("Vehicular","Publico")
    ,conductor INT(10)
    ,propietario INT(10) 
    ,PRIMARY KEY (id)  

);

CREATE TABLE propietario (
     id INT AUTO_INCREMENT
    ,numero_cedula int(12)
    ,primer_nombre VARCHAR(100)
    ,segundo_nombre VARCHAR(100)
    ,apellido VARCHAR(100)
    ,direccion VARCHAR(100)
    ,telefono VARCHAR(100)
    ,ciudad VARCHAR(100)
    ,PRIMARY KEY (id)  

);

CREATE TABLE conductor (
     id INT AUTO_INCREMENT
    ,numero_cedula int(12)
    ,primer_nombre VARCHAR(100)
    ,segundo_nombre VARCHAR(100)
    ,apellido VARCHAR(100)
    ,direccion VARCHAR(100)
    ,telefono VARCHAR(100)
    ,ciudad VARCHAR(100)
    ,PRIMARY KEY (id)  

);

CREATE TABLE tipo_vehiculo (
     id INT AUTO_INCREMENT
    ,descripcion VARCHAR(100)
    ,PRIMARY KEY (id)  

);

INSERT INTO tipo_vehiculo VALUES(0,"Publico");

SELECT * FROM propietario;

INSERT INTO propietario (id
                        ,numero_cedula
                        ,primer_nombre
                        ,segundo_nombre
                        ,apellido
                        ,direccion
                        ,telefono) Values(0 ,'3121' ,'Julian' ,'Julian' ,'Pirachican' ,'Cra 2 #56-64' ,'3312321' );



