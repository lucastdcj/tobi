#!/usr/bin/python
from random import sample
import sys
x = sample(xrange(1,int(sys.argv[1]) + 1), int(sys.argv[1]) - 1)
print "%d" % (int(sys.argv[1]))
for i in x:
    print "%d" % (i),
print

