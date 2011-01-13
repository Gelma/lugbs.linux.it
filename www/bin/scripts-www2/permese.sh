#!/bin/bash
export FS="."
export OFS=""
rm -rf ~lugbs/public_html/archive/lug/monthly/*
ls ~lugbs/archive/lug | sort |  awk -F"." -f ~lugbs/bin/permese.awk
