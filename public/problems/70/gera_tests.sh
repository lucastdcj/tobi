#!/bin/bash



for i in $(seq 1 3); do
	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_envelopes_pj.py 10 > tests/$i/in1

	done;

for i in $(seq 4 11); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_envelopes_pj.py 100 > tests/$i/in1

	done;

for i in $(seq 12 20); do

	echo Gerando teste $i
	[ -d "tests/$i" ] || mkdir tests/$i
	python gera_envelopes_pj.py 1000 > tests/$i/in1

	done;




	
