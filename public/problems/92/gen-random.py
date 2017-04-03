#!/usr/bin/python

import sys
import random

N = int(sys.argv[1])

L = []

for i in range(N):
	for j in range(i + 1, N):
		if random.randint(1, 2) == 1:
			L.append((i + 1, j + 1, random.randint(1, 100)))

print N, len(L)

for a, b, d in L:
	print a, b, d

