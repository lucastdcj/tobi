#!/bin/bash



for i in $(seq 1 3); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_fugitivo.py 2 1000 1 10000 30 > tests/$i/in1

	done;

for i in $(seq 4 10); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_fugitivo.py 10000 20000 100000 400000 1000 > tests/$i/in1

	done;

for i in $(seq 11 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_fugitivo.py 100000 500000 500000 1000000 1000 > tests/$i/in1

	done;




	
