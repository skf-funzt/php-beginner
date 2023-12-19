#!/bin/bash

cd locale/de_DE.utf8/LC_MESSAGES

msgfmt myapp.po --output-file=myapp.mo

cd ../../..

cd locale/fr_FR.utf8/LC_MESSAGES

msgfmt myapp.po --output-file=myapp.mo

cd ../../..
