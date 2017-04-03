#!/usr/bin/python

# generate test cases for problem
# Campo de arroz
# Maratona 2009
# r. anido

import sys
from random import randint,seed,sample

MAXVAL=20
MINVAL=0

matches={'A':{1:1,9:1,13:1,15:1},
         'B':{1:2,9:1,13:1,15:1},
         'C':{2:1,9:2,13:1,15:1},
         'D':{2:2,9:2,13:1,15:1},
         'E':{3:1,10:1,13:2,15:1},
         'F':{3:2,10:1,13:2,15:1},
         'G':{4:1,10:2,13:2,15:1},
         'H':{4:2,10:2,13:2,15:1},
         'I':{5:1,11:1,14:1,15:2},
         'J':{5:2,11:1,14:1,15:2},
         'K':{6:1,11:2,14:1,15:2},
         'L':{6:2,11:2,14:1,15:2},
         'M':{7:1,12:1,14:2,15:2},
         'N':{7:2,12:1,14:2,15:2},
         'O':{8:1,12:2,14:2,15:2},
         'P':{8:2,12:2,14:2,15:2},
         'Z':{}
         }


def gen_random(maxv):
    for j in range(0,15):
        m,n=0,0
        while m==n:
            m,n=randint(0,maxv),randint(0,maxv)
        print m,n

try:
    maxv = int(sys.argv[1])
except:
    print "need max value!"
    exit(1)

try:
    team = sys.argv[2]
except:
    team='Z'

keymatches=matches[team]

for j in range(1,16):
    m,n=0,0
    while m==n:
        m,n=randint(0,maxv),randint(0,maxv)
    if j in keymatches.keys():
        if (m>n and keymatches[j]==2) or (m<n and keymatches[j]==1):
            tmp=m
            m=n
            n=tmp
    print m,n

