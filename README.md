#Servidor Nginx

Contendor con servidor Nginx y extensión para conexión con postgres<br/><br/>
Comando para generar nuestra imagen apartir de la imagen base de 
<b>webdevops/php-nginx:centos-7-php56</b>

<ul type="disk">
<li><b>docker build -t nginx .</b></li>
</ul>

Como correr nuestro contedor <br/>
Si se desea conectar a un servidor postgres que esta alojado en otro contendor basta con pasarle la bandera <b>--link name_container/id_container</b>, ejemplo:
<ul type="disk">
<li><b>docker run -d --link postgres_db nginx</b></li>
</ul>

Ademas se tiene disponible dos(2) variables de entorno las cuales pueden ser utilizadas para ser conexion al contenedor postgres 
<ul type="disk">
<li><b>HOST_DB_PGSQL</b>:Se debe poner el mismo nombre que se paso por el parametro --link de no pasar ningun parametros el valor por defecto es (postgres_db) </li>
<li><b>PASS_DB_PGSQL</b>:Se puede enviar el parametro para asignar una variable de entorno con la contraseña del servidor postgres de no enviar un valor esta toma por defecto (dockerpostgres) </li>
</ul>

Ejemplo de utilizar el comando: 
<ul type="disk">
<li>docker run -d --link postgres_prueba -e HOST_DB_PGSQL=postgres_prueba -e PASS_DB_PGSQL=123456 nginx</li>
</ul>

El path donde seran alojados nuestros sitios es <b>/app</b> en el cual en primera instancia se encontrara un archivo <b>index.php</b> con toda la informacion phpinfo(); ademas de un archivo <b>conexion.php</b> para probar nuestro enlace al servidor de base de datos postgres<br/><br/>

Si desea conocer la ip que tiene asignado nuestro contenedor puede ejecutar el siguiente comando:
<ul type="disk">
<li>docker inspect --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $i <b>name_container/id_container</b></li>
</ul>




