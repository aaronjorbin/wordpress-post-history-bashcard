#!/bin/sh

#remove old files
rm datafile
rm posthistorychart.png

php punchcard.php $1
python wppunchcard.py
