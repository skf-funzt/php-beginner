#!/bin/bash

xgettext \
  --add-comments \
  --from-code=UTF-8 \
  -o ./myapp.pot \
  ./public/gettext/*.php