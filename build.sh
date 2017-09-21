#! /usr/bin/env bash

cd helloworld/qiandao/
docker build -t ctfhub:qiandao .
cd ../../
cd php_characteristics/qiannuyou/
docker build -t ctfhub:qiannvyou .
cd ../../
cd php_characteristics/picoctf2013_php1/
docker build -t ctfhub:php1 .
cd ../../
cd php_characteristics/picoctf2013_php2/
docker build -t ctfhub:php2 .
cd ../../
cd php_characteristics/picoctf2013_php3/
docker build -t ctfhub:php3 .
cd ../../
cd php_characteristics/picoctf2013_php4/
docker build -t ctfhub:php4 .
cd ../../
cd sql_injection/picoctf2013_injection/
docker build -t ctfhub:injection .
cd ../../
cd php_characteristics/soeasy/
docker build -t ctfhub:soeasy .
cd ../../
cd sql_injection/chengjidan/
docker build -t ctfhub:chengjidan .
cd ../../
cd sql_injection/sqli_labs/
docker build -t ctfhub:sqlilabs .
cd ../../
