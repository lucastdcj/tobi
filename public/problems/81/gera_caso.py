import random
import sys

def getn(a,b): return random.randint(a,b)

minN = int(sys.argv[1])
maxN = int(sys.argv[2])
minV = int(sys.argv[3])
maxV = int(sys.argv[4])

N = getn(minN,maxN)

print N

nums = []

for i in xrange(N): nums.append(getn(minV, maxV));

print " ".join(map(str,nums))

