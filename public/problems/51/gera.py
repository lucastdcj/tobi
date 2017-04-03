import sys
from random import *

min_n, max_n = int(sys.argv[1]), int(sys.argv[2])
min_e, max_e = int(sys.argv[3]), int(sys.argv[4])


is_rand = not randint(0,4)

n = randint(min_n, max_n)
e = 0

if is_rand:
	e = randint(min_e, max_e)
else:
	e = 2*randint(min_e/2, max_e/2)


print n, e


if is_rand:
	pos = sample(range(1,n),e)
	dir = map(lambda x: 1 - 2*(x%2), sample(range(1,n), e))

	for i in xrange(e):
		print pos[i], dir[i]

else:
	dist = randint(1,n)
	foi = {}
	duplas = []

	for i in xrange(e/2):
		dir = sample([1,-1],1)[0]
		pos=0
		newpos = 0

		if dir == -1:
			newpos = 



