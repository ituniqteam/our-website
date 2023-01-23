FROM nginx

RUN mkdir -p /var/www/html
WORKDIR /var/www/html

RUN addgroup -g 1000 demo && adduser -G demo -g demo -s /bin/sh -D demo

RUN chown demo:demo /var/www/html

COPY itunique_net.crt /etc/nginx/ssl/itunique.net/
COPY itunique_net.key /etc/nginx/ssl/itunique.net/

RUN apk update \
&& ln -sf ./nginx/ssl/itunique.net /etc/nginx/ssl

ADD ./nginx/nginx.conf /etc/nginx/nginx.conf
ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf

