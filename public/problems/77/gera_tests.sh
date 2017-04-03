#!/bin/bash



for i in $(seq 1 4); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_notas.py 0 10 > tests/$i/in1

	done;

for i in $(seq 5 12); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_notas.py 0 50 > tests/$i/in1

	done;

for i in $(seq 13 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_notas.py 50 100  > tests/$i/in1

	done;




	
