FROM alpine:latest
RUN apk update
RUN apk add php85-fpm php85-mysqli php85-pgsql php85-pecl-redis
EXPOSE 9000
CMD ["php-fpm85", "-F"]
