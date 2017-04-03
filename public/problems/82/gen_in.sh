#!/bin/bash

#for i in `seq 1 3`; do
#	for j in `seq 1 3`; do
#		python gen_tests.py 10 10 10> test$i/in$j
#	done
#done

for i in `seq 4 6`; do
	for j in `seq 1 3`; do
		python gen_tests.py 10 10 10 > test$i/in$j
	done
done

for i in `seq 7 11`; do
	for j in `seq 1 3`; do
		python gen_tests.py 100 100 100 > test$i/in$j
	done
done

for i in `seq 12 20`; do
	for j in `seq 1 3`; do
		python gen_tests.py 1000 1000 1000 > test$i/in$j
	done
done
