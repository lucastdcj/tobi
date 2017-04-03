#!/bin/bash



for i in $(seq 1 3); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_mito.py 2 1000 > tests/$i/in1

	done;

for i in $(seq 4 10); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_mito.py 50000 100000 > tests/$i/in1

	done;

for i in $(seq 11 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_mito.py 300000 500000  > tests/$i/in1

	done;




	
