FROM webdevops/php-nginx:centos-7-php56
RUN yum install -y  php56w-pgsql
ENV HOST_DB_PGSQL=postgres_db
ENV PASS_DB_PGSQL=dockerpostgres
ADD archivosPHP/conexion.php /app/conexion.php
ADD archivosPHP/index.php /app/index.php
