#!/bin/bash

for i in `seq 0 20`;
do
	for j in `seq 1 3`;
	do
		res=$(../solution/sol_stein < test$i/in$j)
		res2=$(cat test$i/out$j)
		if [ "$res" != "$res2" ]; then
			echo diferenca no teste $i, caso $j
		fi
	done
done

