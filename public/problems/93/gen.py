import re
import sys
import os

for i in xrange(15,21):
	for j in xrange(1,4):
		file = "test%d/in%d" % (i,j)
		os.system("python gen_case.py > " + file)
		os.system("../solution/sol < %s > test%d/out%d" % (file, i, j))


