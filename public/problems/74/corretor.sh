#!/bin/sh

INPUT_FILE=$1
JUDGE_OUT_FILE=$2
OUTPUT_FILE=$3

if (ruby ~/corretor/fase2_2009/testes_fase2/cadeiras/judge.rb 3< $1 4< $2 5< $3)
then
	exit 0
else
	exit 1
fi
