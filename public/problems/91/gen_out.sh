#!/bin/sh

# Testes fracos
for i in `seq 1 20`; do
	dir=test$i
	j=1
	while [ -e $dir/in$j ]; do
		echo Gerando $dir/out$j
		./frete < $dir/in$j > $dir/out$j
		j=$(($j+1))
	done
done
