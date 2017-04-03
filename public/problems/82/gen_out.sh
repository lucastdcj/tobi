#!/bin/sh
for i in `seq 0 20`; do
	dir=test$i
	k=1
	while [ -e ${dir}/in$k ]; do
		echo Gerando $dir/out$k
		./minicalc < ${dir}/in$k > ${dir}/out$k
		k=$(($k+1))
	done
done

