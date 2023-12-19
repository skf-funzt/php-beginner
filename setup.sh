#!/bin/bash

sudo chmod a+x $(pwd)

sudo rm -rf /var/www/html
sudo ln -s $(pwd) /var/www/html

cd /var/www/html && composer install
sudo chmod -R 777 $(pwd)