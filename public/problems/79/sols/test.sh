#!/bin/bash

g++ stein-100pts.cpp     && ./a.out < $1 > tmp1
g++ wanderley-70pts.cpp  && ./a.out < $1 > tmp2

diff tmp1 tmp2
