g++ sol.cpp

t=1
for f in $(ls input/ | grep in); do
  echo "TESTING ${t}"
  ./a.out < input/in${t} > out${t}
  saida=$(diff -b out${t} output/out${t})
  
  if [ -n "$saida" ]; then
    echo "ERRO"
  fi

  let t=${t}+1
done
