FROM debian:jessie
# maintainer Janei Araujo

# Instalando dependências do S.O

RUN apt-get update && apt-get install -y \
		wget 	\
		build-essential 	\
		git 	\
		curl 	\
		gcc 	\
		g++ 	\
		make 

## Instalando WebServer (Apache 2.4 + PHP 5.6
		
RUN apt-get update && apt-get install -y \
		apache2 	\
		apache2-utils 	\
		php5            \
		php5-dev        \
		php-pear        \
		php5-cli 	\
		php5-curl 	\
		php5-gd 	\
		php5-json 	\
		php5-imap 	\
		php5-mcrypt 	\
		php5-mongo 	\
		php5-mssql 	\
		php5-mysql 	\
		php5-mysql 	\
		php5-pgsql 	\
		php5-xdebug 	\
                php5-redis 	\
                php5-memcached	\
		php5-intl	\
		php5-sqlite     \
		php5-apcu       \
		php5-xmlrpc  

## Configurações do WebServer

#RUN cd /srv
## Intalando Lib (zend-loader)
#RUN wget http://downloads.zend.com/guard/7.0.0/zend-loader-php5.6-linux-x86_64_update1.tar.gz  && tar zxvf zend-loader-php5.6-linux-x86_64_update1.tar.gz && \
#    cp zend-loader-php5.6-linux-x86_64/ZendGuardLoader.so /usr/lib/php5/20131226  && \
#    echo "zend_extension=/usr/lib/php5/20131226/ZendGuardLoader.so" >> /etc/php5/apache2/conf.d/20-zend-guard.ini && \
#    echo "zend_extension=/usr/lib/php5/20131226/ZendGuardLoader.so" >> /etc/php5/mods-available/20-zend-guard.ini  && \
#    echo "zend_extension=/usr/lib/php5/20131226/ZendGuardLoader.so" >> /etc/php5/cli/conf.d/20-zend-guard.ini 
## Instalando Lib (ioncube)
#RUN curl -o ioncube.tar.gz http://downloads3.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz && \ 
#    tar -xvvzf ioncube.tar.gz && \
#    mv ioncube/ioncube_loader_lin_5.6* /usr/lib/php5/20131226/ && \
#    rm -Rf ioncube.tar.gz ioncube && \
#    ## Configurando Xdebug
#    echo "zend_extension=/usr/lib/php5/20131226/ioncube_loader_lin_5.6.so" > /etc/php5/mods-available/00_ioncube_loader_lin_5.6.ini && \
#    echo "zend_extension=/usr/lib/php5/20131226/ioncube_loader_lin_5.6_ts.so" > /etc/php5/mods-available/00_ioncube_loader_lin_5.6.ini && \
#    echo "zend_extension=/usr/lib/php5/20131226/ioncube_loader_lin_5.6.so" > /etc/php5/apache2/conf.d/00_ioncube_loader_lin_5.6.ini && \
#    echo "zend_extension=/usr/lib/php5/20131226/ioncube_loader_lin_5.6_ts.so" > /etc/php5/apache2/conf.d/00_ioncube_loader_lin_5.6.ini && \
#     echo "zend_extension=/usr/lib/php5/20131226/ioncube_loader_lin_5.6.so" > /etc/php5/cli/conf.d/00_ioncube_loader_lin_5.6.ini && \
#    echo "zend_extension=/usr/lib/php5/20131226/ioncube_loader_lin_5.6_ts.so" > /etc/php5/cli/conf.d/00_ioncube_loader_lin_5.6.ini && \
#    ## Configurando Xdebug
#    echo "zend_extension=/usr/lib/php5/20131226/xdebug.so" >> /etc/php5/apache2/php.ini && \
#    echo "xdebug.remote_enable=1" > /etc/php5/apache2/php.ini && \
#    echo "xdebug.remote_port=9000" > /etc/php5/apache2/php.ini && \
#    echo "xdebug.remote_connect_back=1" >> /etc/php5/apache2/php.ini && \
#    echo "xdebug.remote_enable=1" >> /etc/php5/apache2/php.ini && \
#    echo "xdebug.remote_connect_back=1" >> /etc/php5/apache2/php.ini && \
#    echo "xdebug.remote_autostart=1" >> /etc/php5/apache2/php.ini && \
#    echo "xdebug.idekey=netbeans-xdebug" >> /etc/php5/apache2/php.ini && \
#    ## Config PHP - CLI
#    echo "zend_extension=/usr/lib/php5/20131226/xdebug.so" >> /etc/php5/cli/php.ini && \
#    echo "xdebug.remote_enable=1" > /etc/php5/cli/php.ini && \
#    echo "xdebug.remote_port=9000" > /etc/php5/cli/php.ini && \
#    echo "xdebug.remote_connect_back=1" >> /etc/php5/cli/php.ini && \
#    echo "xdebug.remote_enable=1" >> /etc/php5/cli/php.ini && \
#    echo "xdebug.remote_connect_back=1" >> /etc/php5/cli/php.ini && \
#    echo "xdebug.remote_autostart=1" >> /etc/php5/cli/php.ini && \
#    echo "xdebug.idekey=netbeans-xdebug" >> /etc/php5/cli/php.ini


# Ativando Módulos do Apache
RUN a2enmod php5 && a2enmod rewrite && a2enmod headers && a2enmod expires
    ENV APACHE_RUN_USER www-data
    ENV APACHE_RUN_GROUP www-data
    ENV APACHE_LOG_DIR /var/log/apache2
    ENV APACHE_PID_FILE /var/run/apache2.pid
    ENV APACHE_RUN_DIR /var/run/apache2
    ENV APACHE_LOCK_DIR /var/lock/apache2

CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]
## Expondo Portas TCP
EXPOSE 80
EXPOSE 443
EXPOSE 9000