FROM centos:7
LABEL maintainer="jdelefrati@godaddy.com"

RUN yum -y update && \
    yum -y install wget \
        curl \
        which \
        yum-utils \
        httpd

RUN wget https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm && \
    wget https://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
    rpm -Uvh remi-release-7.rpm epel-release-latest-7.noarch.rpm && \
    yum-config-manager --enable remi-php73 && \
    yum -y update && \
    yum -y install php73-php \
        php73-php-cli \
        php73-php-common \
        php73-php-json && \
    ln -s /usr/bin/php73 /usr/bin/php

RUN echo -e "date.timezone = America/New_York" >> /etc/php.ini


COPY ./entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

WORKDIR /var/www/

EXPOSE 80