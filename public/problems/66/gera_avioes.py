import random
import sys

maxC, maxP, maxF = int(sys.argv[1]), int(sys.argv[2]), int(sys.argv[3])

tipo = random.randint(1,5)

F = random.randint(1,maxF)
C = random.randint(1,maxC)
P = 0

if tipo == 1 or tipo == 2: P = F * C - random.randint(1,F*C-1)
elif tipo == 3: P = F * C
else: P = F * C + random.randint(1, max(maxP - F*C,1))

print C,P,F

