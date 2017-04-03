from random import *
from sys import *

minn,maxn,minm,maxm, maxk = int(argv[1]), int(argv[2]), int(argv[3]), int(argv[4]), int(argv[5])

n = randint(minn,maxn)
m = randint(minm,maxm)


print n,m

x=y=0

pode = randint(0,1)

probs = [[1,5,3,1],
	 [2,3,2,3],
	 [3,2,2,3],
	 [1,4,4,1]]


dirs = [('N',(0,1)), ('S',(0,-1)), ('L',(1,0)), ('O',(-1,0))]


def get_dir(arr):
	p = randint(1,10)

	for i in xrange(4):
		if p <= arr[i]:
			return dirs[i]
		p -= arr[i]
	return None


pr = choice(probs)

for i in xrange(n):
	(c, (dx,dy)) = get_dir(pr)
	d = randint(1, maxk)
	nx = x + dx*d
	ny = y + dy*d

	while pode == 0 and nx*nx + ny*ny > m*m:

		(c, (dx,dy)) = get_dir(pr)
		d = randint(1, maxk)
		nx = x + dx*d
		ny = y + dy*d

	if nx*nx + ny*ny > m*m and pode == 0:
		raise "Deu merda"
	
	x = nx
	y = ny
	print c,d



