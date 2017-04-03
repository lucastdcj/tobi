from sys import *
from math import *
from random import *

minn,maxn,mind,maxd,minc,maxc,maxv = int(argv[1]), int(argv[2]), int(argv[3]), int(argv[4]), int(argv[5]), int(argv[6]), int(argv[7])

n = randint(minn,maxn)

c=d=0

def eq(a,b): return abs(a-b) < 1e-7

nums = []

print n
for i in xrange(n):
	while True:
		c = randint(minc, maxc)
		d = randint(mind, maxd)
	
		if maxv > -1 and log(maxv) < c*log(d):
			continue
		
		valid = True
		for (a,b) in nums:
			if eq(c*log(d), b*log(a)):
				valid = False
				break
		if valid:
			print d,c
			nums.append((d,c))
			break 

