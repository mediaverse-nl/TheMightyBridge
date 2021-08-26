FROM php:8.0.3-fpm-alpine

#ENV USER=www-data
#ENV UID=82
#ENV GID=82
#
#RUN adduser \
#    --disabled-password \
#    --gecos "" \
#    --home "$(pwd)" \
#    --ingroup "$USER" \
#    --no-create-home \
#    --uid "$UID" \
#    "$USER"

RUN docker-php-ext-install \
        pdo_mysql \
        mysqli



COPY ./docker/cron/crontab /etc/crontabs/root

#COPY ./docker/cron/crontab /etc/crontabs/$USER

#USER $USER

CMD ["crond", "-f", "-d", "8"]

WORKDIR /src