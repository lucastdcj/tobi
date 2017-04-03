#!/usr/bin/env python

import sys
import random

N = int(sys.argv[1])
L = int(sys.argv[2])

if N % 2 == 0:
	N -= 1

if N % 4 == 1:
	print 0, 0, L, N
else:
	print 0, 0, 0, N

print N
for i in range(N/2 + 1):
	print 0, 2*i, L, 2*i+1

for i in range(N/2):
	if i % 2 == 0:
		print L-1, 2*i, L, 2*i+3
	else:
		print 0, 2*i, 1, 2*i+3
