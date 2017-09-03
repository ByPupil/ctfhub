#! /usr/bin/env bash

cd helloworld/qiandao/
docker build -t ctfhub:qiandao .
cd ../../
cd php_characteristics/qiannuyou/
docker build -t ctfhub:qiannvyou .
cd ../../
cd php_characteristics/picoctf2013_php2/
docker build -t ctfhub:php2 .
cd ../../
cd php_characteristics/picoctf2013_php3/
docker build -t ctfhub:php3 .
cd ../../
