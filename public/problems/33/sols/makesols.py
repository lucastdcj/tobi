#!/usr/local/bin/python

# generate all out files for a problem
# ranido

import sys,os,math,commands
from subprocess import call

def error(s):
    print >> sys.stderr, "error: %s" % s
    sys.exit(1)

try:
    solution=sys.argv[1]
    if not os.access(solution, os.X_OK):
        error('cannot execute %s' % solution)
except:
    print 'usage: %s executable' % (sys.argv[0])
    sys.exit(-1)
    
for i in range(1,100):
    test_dir=os.path.join("..","test%d" % i)
    if os.access(test_dir, os.X_OK):
        for j in range(1,100):
            test_in=os.path.join(test_dir,"in%d" % j)
            test_out=os.path.join(test_dir,"out%d" % j)
            if os.access(test_in, os.R_OK):
                print test_in
                (status,output)=commands.getstatusoutput("time ./%s < %s > %s" % (solution, test_in, test_out))
                if status!=0: error("got error!")
                print output
            else:
                break
        else:
            continue
    else:
        break

    
    
