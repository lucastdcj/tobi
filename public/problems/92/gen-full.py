#!/usr/bin/python

import sys
import random

N = int(sys.argv[1])

print N, N * (N-1) / 2

for i in range(N):
	for j in range(i + 1, N):
		print i + 1, j + 1, random.randint(1, 100)
