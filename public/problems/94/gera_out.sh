#!/bin/sh


#Testes fracos
for i in `seq 1 20`; do
	for j in `seq 1 2`; do
		echo Gerando test$i/out$j
		./orto < test$i/in$j > test$i/out$j
	done
done

