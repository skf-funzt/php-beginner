#!/bin/bash

mkdir -p locale/de_DE.utf8/LC_MESSAGES

msginit \
  --locale de_DE.utf8 \
  --input ./myapp.pot \
  --output locale/de_DE.utf8/LC_MESSAGES/myapp.po

mkdir -p locale/fr_FR.utf8/LC_MESSAGES

msginit \
  --locale fr_FR.utf8 \
  --input ./myapp.pot \
  --output  locale/fr_FR.utf8/LC_MESSAGES/myapp.po