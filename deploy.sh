#!/bin/bash

if  [[ $TRAVIS_PULL_REQUEST = "false" ]]
then
    ncftp -u "$USERNAME" -p "$PASSWORD" "$HOST"<<EOF
    rm -rf themes/custom-abc
    mkdir themes/custom-abc
    quit
EOF
    ncftpput -R -v -u "$USERNAME" -p "$PASSWORD" "$HOST" /themes/custom-abc .
fi
