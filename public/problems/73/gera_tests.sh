#!/bin/bash



for i in $(seq 1 2); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_bacterias.py 1 200 1 100 1 10 1000000 > tests/$i/in1

	done;

for i in $(seq 3 10); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_bacterias.py 500 2000 1000 2000 1000 5000 -1 > tests/$i/in1

	done;

for i in $(seq 11 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_bacterias.py 10000 50000 1000 2000 3000 5000 -1  > tests/$i/in1

	done;




	
