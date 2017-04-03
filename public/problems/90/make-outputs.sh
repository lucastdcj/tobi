#!/bin/sh

for i in `seq 1 20`; do
	for j in `ls test$i/in* | cut -f2 -dn`; do
		echo "test$i/out$j..."
		time ./sol < test$i/in$j > test$i/out$j;
	done
done
