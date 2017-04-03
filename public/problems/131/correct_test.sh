#!/bin/bash

mkdir input;
mkdir output;

t=1;
for d in */; do    
    if [ $d = "input/" ]; then        
        continue;
    fi
    if [ $d = "output/" ]; then        
        continue;
    fi
    if [ $d = "sols/" ]; then        
        continue;
    fi
   
    echo "$d";
    cd $d;
    
    for f in $(ls | grep in); do
      input=$f;
      output=${f//in/out}            
      ninput="in$t";
      noutput="out$t";
      mv $input ../input/$ninput;
      mv $output ../output/$noutput;
      let t=t+1;
    done;
    cd ..;
    rm -r $d;
    
done
