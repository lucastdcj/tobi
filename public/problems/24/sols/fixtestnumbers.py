#!/usr/local/bin/python

# generate all out files for a problem
# ranido

import sys,os,math,commands
from subprocess import call

def error(s):
    print >> sys.stderr, "error: %s" % s
    sys.exit(1)

for i in range(1,20):
    test_dir=os.path.join("..","test%d" % i)
    last_in=-1
    if os.access(test_dir, os.X_OK):
        print '***', test_dir
        first_in=os.path.join(test_dir,"in0")
        if os.access(first_in, os.R_OK):
            for j in xrange(10,0,-1):
                last_in=os.path.join(test_dir,"in%d" % j)
                if os.access(last_in, os.F_OK):
                    break
                else:
                    continue
            for k in range(j+1,0,-1):
                os.rename(os.path.join(test_dir, "in%d"%(k-1)), os.path.join(test_dir,"in%d" % (k)))
        else:
            sys.exit(-1)
    else:
        break
    
