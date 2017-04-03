#!/usr/bin/python

import sys
import random

N = int(sys.argv[1])

print N, N

for i in range(N):
	print i + 1, (i + 1) % N + 1, random.randint(1, 100)
