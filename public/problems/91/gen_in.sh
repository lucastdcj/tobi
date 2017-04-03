#!/bin/sh

# Testes fracos
for i in `seq 1 6`; do
	dir=test$i
	for j in `seq 1 2`; do
		file=$dir/in$j
		echo Gerando $file
		python gen_teste.py 10 100 > $file
	done
done


# Testes médios
for i in `seq 7 17`; do
	dir=test$i
	for j in `seq 1 2`; do
		file=$dir/in$j
		echo Gerando $file
		python gen_teste.py 100 1000 > $file
	done
done


#Testes fortes
for i in `seq 18 20`; do
	dir=test$i
	file=$dir/in1
	echo Gerando $file
	python gen_teste.py 1000 10000 > $file
done

