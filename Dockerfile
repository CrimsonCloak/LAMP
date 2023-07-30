FROM php:8.2-cli
COPY . /usr/src/lamp
WORKDIR /usr/src/lamp
CMD [ "php", "./index.php" ]