# WSDL con PHP
Ejemplo de petición de un API KEY a un servidor remoto a través de WSDL utilizando PHP. Código documentado totalmente en Español.

#cliente.php (Servidor Local)
Utilizado para llamar, enviar key y obtener respuestas desde el servidor remoto empleando PHP.

#apikey.wsdl (Servidor Remoto)
Archivo WSDL dónde se definen las variables de solicitud / respuesta que empleará "ApiKeyServicio.php" para efectuar la validación.

#ApiKeyServicio.php (Servidor Remoto)
Carga las extensiones del SOAP y lo referencia al archivo "apikey.wsdl" para devolver las funciones definidas en el mismo. Desde este archivo se devuelve si el Key es válido o no.

