FROM bitnami/php-fpm:7.4
RUN useradd -ms /bin/bash dev && apt-get update && apt-get install -y git
COPY --chown=1001:1001 ./php/www.override.conf /opt/bitnami/php/etc/php-fpm.d/