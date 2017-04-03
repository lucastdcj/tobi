#!/bin/sh

# Testes fracos
for i in `seq 1 20`; do
	dir=test$i
	rm $dir/in* 
	rm $dir/out*
	
done
