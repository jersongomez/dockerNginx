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

El path donde seran alojados nuestros sitios es <b>/app</b> en el cual en primera instancia se encontrara un archivo <b>index.php</b> con toda la informacion phpinfo(); ademas de un archivo <b>conexion.php</b> para probar nuestro enlace al servidor de base de datos postgres<br/><br/>

Si desea conecer la ip que tiene asignado nuestro contenedor puede ejecutar el siguiente comando:
<ul type="disk">
<li>docker inspect --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $i <b>name_container/id_container</b></li>
</ul>




