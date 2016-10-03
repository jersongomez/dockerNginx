FROM webdevops/php-nginx:centos-7-php56
RUN yum install -y  php56w-pgsql
ADD archivosPHP/conexion.php /app/conexion.php
ADD archivosPHP/index.php /app/index.php
