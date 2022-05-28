FROM alpine:3.12

RUN apk update && apk upgrade

RUN apk add nginx openssl

RUN mkdir /run/nginx/

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/services.key -out /etc/ssl/certs/services.crt -subj "/C=RU/ST=Russia/L=Kazan/O=21/OU=21School/CN=akasha"

COPY /tools/default.conf /etc/nginx/conf.d/default.conf
#COPY  /tools/default.conf /etc/nginx/http.d/my.conf

#RUN mkdir /etc/nginx/sites-available/ && mkdir /etc/nginx/sites-enabled/
#COPY tools/default.conf /etc/nginx/sites-available/conf
#RUN  ln -s /etc/nginx/sites-available/conf /etc/nginx/sites-enabled/



EXPOSE 80 443
CMD nginx -g 'daemon off;'