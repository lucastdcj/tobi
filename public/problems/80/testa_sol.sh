#!/bin/bash

sol=$1

#Testes fracos
for i in `seq 1 20`; do
    echo Teste test$i
    for j in `seq 1 2 3`; do
	if test -f test$i/in$j  ; then
	    echo "        " in$j
	    ./${sol} < test$i/in$j | diff - test$i/out$j
	fi
    done
done

