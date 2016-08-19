<?php
//Carga las exntesiones de SOAP en PHP
if(!extension_loaded("soap")){
      dl("php_soap.dll");
}
//Define un nuevo SoapServer donde se anexa el archivo WSDL.
ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("apikey.wsdl");

//Define una función simple de validación
function valida($key){
    if($key == "994c57796fef4462521ded4d9db1b879a2e26ac9"){
        return "ApiKey Válido";
    }else{
        return "ApiKey Inválido";
    }
}

//Se anexa la función de manera temporal a la clase Soap para que sea ejecutada 
//a través del cliente local (ver línea 21 del archivo cliente.php)
$server->AddFunction("valida");
$server->handle();
?>