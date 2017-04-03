#!/bin/sh

echo "test1"
./gen-random.py    1 > test1/in1
./gen-zero.py      1 > test1/in2
echo "test2"
./gen-ortog.py     1 > test2/in1
./gen-max.py       1 > test2/in2

echo "test3"
./gen-random.py    2 > test3/in1
./gen-zero.py      2 > test3/in2
echo "test4"
./gen-ortog.py     2 > test4/in1
./gen-max.py       2 > test4/in2

echo "test5"
./gen-random.py    5 > test5/in1
./gen-zero.py      5 > test5/in2
echo "test6"
./gen-ortog.py     5 > test6/in1
./gen-max.py       5 > test6/in2

echo "test7"
./gen-random.py   10 > test7/in1
./gen-zero.py     10 > test7/in2
echo "test8"
./gen-ortog.py    10 > test8/in1
./gen-max.py      10 > test8/in2

echo "test9"
./gen-random.py   25 > test9/in1
./gen-zero.py     25 > test9/in2
echo "test10"
./gen-ortog.py    25 > test10/in1
./gen-max.py      25 > test10/in2

echo "test11"
./gen-random.py   50 > test11/in1
./gen-zero.py     50 > test11/in2
echo "test12"
./gen-ortog.py    50 > test12/in1
./gen-max.py      50 > test12/in2

echo "test13"
./gen-random.py  100 > test13/in1
./gen-zero.py    100 > test13/in2
echo "test14"
./gen-ortog.py   100 > test14/in1
./gen-max.py     100 > test14/in2

echo "test15"
./gen-random.py  250 > test15/in1
./gen-zero.py    250 > test15/in2
echo "test16"
./gen-ortog.py   250 > test16/in1
./gen-max.py     250 > test16/in2

echo "test17"
./gen-random.py  500 > test17/in1
./gen-zero.py    500 > test17/in2
echo "test18"
./gen-ortog.py   500 > test18/in1
./gen-max.py     500 > test18/in2

echo "test19"
./gen-random.py 1000 > test19/in1
./gen-zero.py   1000 > test19/in2
echo "test20"
./gen-ortog.py  1000 > test20/in1
./gen-max.py    1000 > test20/in2
