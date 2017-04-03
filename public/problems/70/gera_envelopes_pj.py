from random import *
from sys import *

maxN = int(argv[1])
maxV = 10000

N = randint(1,maxN)
arr = []

for i in xrange(N):
	arr.append(str(randint(0,maxV)))

print N
print ' '.join(arr)
