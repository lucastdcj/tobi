#!/usr/bin/python

import sys
import random

try:
	assert len(sys.argv) == 2
	N = int(sys.argv[1])
	assert 1 <= N <= 1000
except (IndexError, ValueError, AssertionError):
	print >> sys.stderr, "usage: %s <N>" % (sys.argv[0], )
	sys.exit(1)

print N
for i in range(N):
	x1 = random.randint(0, 1000)
	y1 = random.randint(0, 1000)
	x2 = x1
	y2 = y1
	if random.random() < 0.5:
		x2 = random.randint(0, 1000)
	else:
		y2 = random.randint(0, 1000)
	print x1, y1, x2, y2
