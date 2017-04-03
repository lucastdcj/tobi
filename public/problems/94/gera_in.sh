#!/bin/sh


#Testes fracos
for i in `seq 1 6`; do
	for j in `seq 1 2`; do
		echo Gerando test$i/in$j
		python gera_caso.py 10 10 > test$i/in$j
	done
done

#Testes medios
for i in `seq 7 17`; do
	for j in `seq 1 2`; do

		echo Gerando test$i/in$j
		python gera_caso.py 50 50 > test$i/in$j
	done
done

#Testes fortes
for i in `seq 18 20`; do
	for j in `seq 1 2`; do

		echo Gerando test$i/in$j
		python gera_caso.py 1000 100 > test$i/in$j
	done
done

