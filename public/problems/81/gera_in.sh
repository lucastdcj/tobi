#!/bin/sh


#Testes fracos
for i in `seq 1 6`; do
	for j in `seq 1 2`; do
		echo Gerando test$i/in$j
		python gera_caso.py 4 10 0 100 > test$i/in$j
	done
done

#Testes medios
for i in `seq 7 17`; do
	for j in `seq 1 2`; do

		echo Gerando test$i/in$j
		python gera_caso.py 50 100 -100 100 > test$i/in$j
	done
done

#Testes fortes
for i in `seq 18 20`; do
	for j in `seq 1 2`; do

		echo Gerando test$i/in$j
		python gera_caso.py 10000 100000 -1000 1000 > test$i/in$j
	done
done

