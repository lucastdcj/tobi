#!/usr/bin/env python

import sys, os, random

N = int(sys.argv[1])
M = int(sys.argv[2])

def gera_nome(size):
    #size = random.randint(2, size)
    letras = 'qazxswedcvfrtgbnhyujmkilop'
    ret = ''
    for i in range(size):
        ret += letras[random.randint(0, len(letras)-1)]
    return ret

nomes = []

for i in range(N):
    nomes.append(gera_nome(M))

K = random.randint(1, N)

print len(nomes), K
for nome in nomes:
    print nome


