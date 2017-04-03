import re
import random
import os
import sys

maxF = 1000
maxC = 26
maxB = 50000


def rint(a,b) : return random.randint(a,b)


for i in xrange(10,21):
	F = rint(2,maxF)
	C = rint(1,maxC)
	E = rint(1,F)
	bool = rint(0,1)
	if bool:	B = rint(2, maxB)
	else: B = rint(2, F-E+2)

	co = "echo %d %d %d %d > test%d/in1" % (F,C,E,B,i)
	os.system(co)
	co = "./aviao < test%d/in1 > test%d/out1" % (i,i)
	os.system(co)

