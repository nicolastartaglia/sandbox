FROM php:8.1.2-apache

# Installation des dépendances et de l'environnement
RUN apt-get update \
	&& apt-get -y upgrade \
	&& apt-get -y --no-install-recommends install \
		wget \
		git \
		libpq-dev \
		apt-transport-https \
        ca-certificates \
        curl \
        gnupg2 \
        libcurl4-openssl-dev \    
        vim \
        unzip \
        postgresql-client \
		mariadb-client \
	&& docker-php-ext-install pdo pdo_pgsql pgsql \
	&& docker-php-ext-install mysqli pdo pdo_mysql
	

#Installation de Synfony
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash && \
	apt install symfony-cli
	
# Installation de Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
	php composer-setup.php && \
	php -r "unlink('composer-setup.php');" && \
	mv composer.phar /usr/local/bin/composer
	
	
#Installation pgsql-parser
RUN apt-get update && apt-get install -y \
	nodejs\
	npm

COPY apache.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
