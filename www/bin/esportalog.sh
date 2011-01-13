#!/bin/sh

# questo script non deve essere eseguito cosi` come e`
# ma va adattato.
# in particolare modo, creare i file ultimo.ml e
# ultimo.log settati a 1.

GPSLOG=/tmp # posizione assoluta dei file di log

prepara () {
ULTIMO=$(/bin/cat $GPSLOG/.ultimo.$1)
/bin/mv $GPSLOG/$1.log $GPSLOG/$1.log.tmp && \
/bin/sleep 2 && \
/usr/bin/bzip2 -9 $GPSLOG/$1.log.tmp && \
/bin/mv $GPSLOG/$1.log.tmp.bz2 $GPSLOG/$1.log.bz2.$ULTIMO && \
ULTIMO=$(($ULTIMO+1)) && \
echo $ULTIMO >$GPSLOG/.ultimo.$1
}

/usr/bin/test -e $GPSLOG/ml.log && prepara ml 
/usr/bin/test -e $GPSLOG/pkg.log && prepara pkg 
