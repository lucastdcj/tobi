#!/bin/bash



for i in $(seq 1 3); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_overflow.py 10 10 10 > tests/$i/in1

	done;

for i in $(seq 4 11); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_overflow.py 100 100 100 > tests/$i/in1

	done;

for i in $(seq 12 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_overflow.py 500000 1000 1000  > tests/$i/in1

	done;




	
