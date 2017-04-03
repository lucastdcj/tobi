t=1
for f in $(ls ./ | grep hanoi.i); do
  echo "MOVING ${t}"
  mv hanoi.i${t} input/in${t}
  let t=${t}+1
done
