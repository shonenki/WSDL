<?php
try{
    //Conexión al WSDL
    $wsdl = "http://tudominio.com/apikey.wsdl"; 
    $options = array(
        'soap_version' => SOAP_1_1, 
        'encoding' => 'UTF-8',
        'compression' => (SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP),
        'cache_wsdl' => WSDL_CACHE_NONE
    );
    //Key temporal estática para pruebas, si se cambia devuelve que es inválida
    //Si se desea implementar en un sistema en producción es necesario el almacenaje en tablas
    //y su posterior consulta.
    $key = "994c57796fef4462521ded4d9db1b879a2e26ac9";
    
    //Llama la clase SoapClient y le envía la ruta remota del WSDL y las opciones definidas
    $clienteSOAP = new SoapClient($wsdl, $options); 
    //clienteSoap llama a la función remota que hace la validación
    $valida = $clienteSOAP->valida($key);
    //imprime resultado de la validación
    echo $valida;
 
} 
//Devuelve el error
catch(SoapFault $e){
    var_dump($e);
}
?>