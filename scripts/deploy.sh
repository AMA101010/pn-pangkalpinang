#!/bin/bash

echo "Please contact administrator first before you can use this command without trouble"

scp pn-pangkalpinang.go.id.conf root@pangkalpinang:/etc/nginx/conf.d/pn-pangkalpinang.go.id.conf
scp www.pn-pangkalpinang.go.id.conf root@pangkalpinang:/etc/nginx/conf.d/www.pn-pangkalpinang.go.id.conf

nginx -t && nginx -s reload