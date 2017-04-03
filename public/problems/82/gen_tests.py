#!/usr/bin/python
import random
import sys

maxN = int(sys.argv[1])
maxD = int(sys.argv[2])
maxQ = int(sys.argv[3])

if random.randint(1,10)>=8:
    # totalmente aleatorio
    print random.randint(1,maxN), random.randint(1,maxD), random.randint(1,maxQ)
elif random.randint(1,10)>=6:
    # divisao perfeita (pode ser impossivel)
    N=random.randint(maxN/2,maxN)
    Q=random.randint(1,maxQ)
    D=Q*random.randint(1,random.randint(2,maxQ))
    if D>maxD:
        D=maxD
    print N,D,Q
else:
    #aleatorio mas nao impossivel
    N=random.randint(maxN/2,maxN)
    D=random.randint(N/2,N)
    Q=random.randint(D/2,D)
    print N,D,Q
