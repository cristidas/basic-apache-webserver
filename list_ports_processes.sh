#!/usr/bin/env bash

netstat -lntp | awk '{print $4 " " $7}' | grep ':' | sed 's/.*://'
