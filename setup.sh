#!/bin/bash

sudo chmod a+x $(pwd)

sudo rm -rf /var/www/html
sudo ln -s $(pwd) /var/www/html

sudo sed -i '0,/Listen 80/s//#&/' /etc/apache2/ports.conf
sudo a2enmod rewrite

cd /var/www/html && composer install
sudo chmod -R 777 $(pwd)

for locale in "de_DE.UTF-8 UTF-8" "fr_FR.UTF-8 UTF-8" "es_ES.UTF-8 UTF-8"
do
  sudo sed -i "/# $locale/s/^# //g" /etc/locale.gen
done

sudo locale-gen

sudo apache2ctl stop
sudo apache2ctl start