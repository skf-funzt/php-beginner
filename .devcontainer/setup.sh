#!/bin/bash

sudo sed -i '0,/Listen 80/s//#&/' /etc/apache2/ports.conf
sudo a2enmod rewrite

for locale in "de_DE.UTF-8 UTF-8" "fr_FR.UTF-8 UTF-8" "es_ES.UTF-8 UTF-8"
do
  sudo sed -i "/# $locale/s/^# //g" /etc/locale.gen
done

sudo locale-gen

# sudo apache2ctl stop
# sudo apache2ctl start