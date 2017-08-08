<?php
class Conecta
{
    private static $servidor = '127.0.0.1' ;
    private static $puerto = '21' ;
    private static $user = 'root';
    private static $password = 'alcatel';
    private static $archivo_local = '/documents';
    private static $archivo_remoto = '/escritorio/subir';

     
    public function __construct() {
    
    }
     
    public function conectar()
    {
      # conexión con el servidor FTP
		if($x=@ftp_connect ($servidor,$puerto)){
		    echo "Conexión FTP activada<br>";
		}else{
		    echo "No se activo lo conexión FTP<br>";
		}
		# registro de usuario
		if(@ftp_login($x,$user,$password)){
		    echo "El login y la password han sido aceptados";
		}else{
		    echo "Error en login o password";
		}
		#desconexión
		ftp_quit($x);
    }


    public function subirArchivo($archivo_local,$archivo_remoto)
	{
		$id_ftp=conectar();  
		ftp_put($x,$archivo_remoto,$archivo_local,FTP_BINARY);
		ftp_quit($x); 
	}
}