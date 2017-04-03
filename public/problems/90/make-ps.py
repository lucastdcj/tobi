#!/usr/bin/python

import sys

x1, y1, x2, y2 = map(int, raw_input().strip().split())
N ,= map(int, raw_input().strip().split())

L = []

maxC = 0

for i in range(N):
	xi, yi, xf, yf = map(int, raw_input().strip().split())
	maxC = max(maxC, xi, yi, xf, yf)
	L.append((xi, yi, xf, yf))

def fix(x):
	return 18 + (x * 550.) / float(maxC)

for xi, yi, xf, yf in L:
	print '''
	newpath
		%d %d moveto
		%d %d lineto
		%d %d lineto
		%d %d lineto
	closepath
	0.5 setgray fill
	''' % (
		fix(xi), fix(yi),
		fix(xi), fix(yf),
		fix(xf), fix(yf),
		fix(xf), fix(yi),
	)

print '''
newpath
	%d %d moveto
	%d %d lineto
	%d %d lineto
	%d %d lineto
closepath
0 setgray fill
''' % (
	fix(x1) - 1, fix(y1) - 1,
	fix(x1) - 1, fix(y1) + 1,
	fix(x1) + 1, fix(y1) + 1,
	fix(x1) + 1, fix(y1) - 1,
)

print '''
newpath
	%d %d moveto
	%d %d lineto
	%d %d lineto
	%d %d lineto
closepath
0 setgray fill
''' % (
	fix(x2) - 1, fix(y2) - 1,
	fix(x2) - 1, fix(y2) + 1,
	fix(x2) + 1, fix(y2) + 1,
	fix(x2) + 1, fix(y2) - 1,
)

print '''
newpath
	%d %d moveto
	%d %d lineto
	%d %d lineto
	%d %d lineto
closepath
0 setgray stroke
''' % (
	fix(0)    , fix(0)    ,
	fix(0)    , fix(10**6),
	fix(10**6), fix(10**6),
	fix(10**6), fix(0)    ,
)

print '''
showpage
'''
