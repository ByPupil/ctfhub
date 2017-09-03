#! /usr/bin/env bash

docker run -i -d -p 30001:80 ctfhub:qiandao
docker run -i -d -p 30002:80 ctfhub:qiannvyou
docker run -i -d -p 30003:80 ctfhub:php2
docker run -i -d -p 30004:80 ctfhub:php3
