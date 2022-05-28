FROM alpine:3.12

RUN	apk update && apk upgrade && apk add openrc mariadb mariadb-client
COPY tools/mariadb.sh /tmp/setup.sh

CMD ["sh", "/tmp/setup.sh"]
