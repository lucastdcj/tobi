#!/usr/bin/python

import sys
import random

N = int(sys.argv[1])

print N, N-1

for i in range(1, N):
	print 1, i + 1, random.randint(1, 100)
