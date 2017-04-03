g++ sol.cpp

t=1
for f in $(ls ./ | grep tetris.i); do
  echo "MOVING ${t}"
  mv tetris.i${t} input/in${t}
  let t=${t}+1
done
