import sys, os, random

N = int(sys.argv[1])
M = int(sys.argv[2])
K = int(sys.argv[3])
R = sys.argv[4]

print N, M

while True:

    entrada = []

    passou = False

    pessoas = 0

    for i in range(N):
        S = random.randint(0, min(pessoas, K))
        pessoas -= S
        if R == 'S':
            E = random.randint(0, min(M+1-pessoas, K))
        else:
            E = random.randint(0, min(K, M-pessoas))
        pessoas += E
        if pessoas > M:
            passou = True
        entrada.append((S, E))

    if R == 'N' or passou:
        break

for i, j in entrada:
    print i, j

    
