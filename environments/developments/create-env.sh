#!/bin/bash

file=$(dirname $(realpath "$0"))/.env
if [ -f $file ]; then
    echo ".env already exist."
else
    touch $file
    echo 'USER_ID='$(id -u) >> $file
    echo 'GROUP_ID='$(id -g) >> $file
fi
