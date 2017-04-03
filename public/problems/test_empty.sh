#!/bin/bash

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
    target=${d}input
    test "$(ls -A "$target" 2>/dev/null)" || echo The directory $target is empty    
    target=${d}output
    test "$(ls -A "$target" 2>/dev/null)" || echo The directory $target is empty   
done
