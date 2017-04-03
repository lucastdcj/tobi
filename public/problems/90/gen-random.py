#!/usr/bin/env python

import sys
import random

N = int(sys.argv[1])
L = int(sys.argv[2])
D = float(sys.argv[3])

xi = random.randint(0, L)
yi = random.randint(0, L)
xf = random.randint(0, L)
yf = random.randint(0, L)
print xi, yi, xf, yf
print N
for i in range(N):
	xa = xb = ya = yb = None
	while xa == xb or ya == yb or abs((xa - xb) * (ya - yb)) > L**D:
		xa = random.randint(0, L)
		xb = random.randint(0, L)
		ya = random.randint(0, L)
		yb = random.randint(0, L)
	x1, x2 = min(xa, xb), max(xa, xb)
	y1, y2 = min(ya, yb), max(ya, yb)
	print x1, y1, x2, y2
	if i % 50 == 0:
		sys.stderr.write('\n')
		sys.stderr.write('%4d' % (i, ))
		sys.stderr.write(' ')
	elif i % 5 == 0:
		sys.stderr.write(' ')
	sys.stderr.write('.')

sys.stderr.write('\n\n')
