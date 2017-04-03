from random import *
from sys import *

MIN, MAX = int(argv[1]), int(argv[2])

res = randint(0,1)

if res:
	arr = [(x,y) for x in xrange(0,501) for y in xrange(0,501)]
	N = min(randint(MIN, MAX),499*499)

	
	shuffle(arr)
	print N
	for i in xrange(N):
		(x,y) = arr.pop()
		print x,y
else:
	N = randint(MIN,MAX)
	print N
	for i in xrange(N):
		print randint(0,500), randint(0,500)

