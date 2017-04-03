t=1
for f in $(ls ./ | grep hanoi.o); do
  echo "MOVING ${t}"
  mv hanoi.o${t} output/out${t}
  let t=${t}+1
done
