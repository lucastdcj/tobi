#!/bin/bash



for i in $(seq 1 3); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_pontes.py 1 100 2 100 > tests/$i/in1

	done;

for i in $(seq 4 11); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_pontes.py 100 500 1000 5000 > tests/$i/in1

	done;

for i in $(seq 12 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_pontes.py 500 1000 5000 10000 > tests/$i/in1

	done;




	
