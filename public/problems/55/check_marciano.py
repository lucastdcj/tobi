#!/usr/bin/python

####
#  check_marciano.py
####  

import sys, os, string, re

line_number=0
finput=''

def get_integer(s,MIN,MAX):
	global line_number
	try:
		v=int(s)
	except:
		print >> sys.stderr, 'integer expected (line %d)' % line_number
		sys.exit(-1)
	if v<MIN or v>MAX:
		print >> sys.stderr, 'integer outside limits (line %d)' % line_number, v
		sys.exit(-1)
	return v


def get_string_letters(s,MAX):
	global line_number
	if len(s)>MAX:
		print >> sys.stderr, 'string size outside limits (line %d)' % line_number
		sys.exit(-1)
	for c in s:
		if c not in string.lowercase:
			print >> sys.stderr, 'string contents, unexpected char (line %d)' % line_number
			sys.exit(-1)
	return s


def get_line():
	global line_number
	l=finput.readline()
	if not l:
		print >> sys.stderr, 'unexpected end of file (line %d)' % line_number
		sys.exit(-1)
	if l[0]==' ' or l[-1]==' ' or l.find('  ')>0:
		print >> sys.stderr, 'spaces in wrong places (line %d)' % line_number
		sys.exit(-1)
	line_number+=1
	l = l.strip()
	return l.split(' ')


def error(msg):
	print >> sys.stderr, "%s (line %d)" % (msg, line_number)
	#sys.exit(-1)


def check(finput,N):
	global line_number

	line_number=1
	
	tokens=get_line()

	if len(tokens) != 4:
		error('wrong number of tokens, must be 4')

	l=get_integer(tokens[0],0,N)
	a=get_integer(tokens[1],0,N)
	p=get_integer(tokens[2],0,N)
	r=get_integer(tokens[3],0,N)
	
	# end of file
	l=finput.readline()
	if l:
		print >> sys.stderr, 'wrong values (line %d)' % line_number


def get_char(token, possible_values):
	if len(token) != 1:
		print >> sys.stderr, 'invalid size of token (line %d)' % line_number
	
	if token not in possible_values:
		print >> sys.stderr, 'wrong char (line %d)' % line_number, token
		sys.exit(-1)
	return token
	

def check_output(finput):
	global line_number

	line_number = 1
	tokens = get_line()

	if len(tokens) != 1:
		print >> sys.stderr, 'wrong number of tokens (line %d)' % line_number

	r = get_char(tokens[0], 'SN')

	l = finput.readline()
	if l:
		print >> sys.stderr, 'wrong values (line %d)' % line_number
			

if __name__ == "__main__":
	####
	# check input
	####
	for j in range(1,3):
		base=os.path.join("test%d" % j)
		if not os.path.exists(base): break
		for i in range(1,101):
			inp = os.path.join(base,"in")
			if not os.path.exists("%s%d" % (inp,i)): break
			print >> sys.stderr, "%s%d" % (inp,i)
			finput=open("%s%d" % (inp,i))
			check(finput,20)
			
	for j in range(3,11):
		base=os.path.join("test%d" % j)
		if not os.path.exists(base): break
		for i in range(1,101):
			inp = os.path.join(base,"in")
			if not os.path.exists("%s%d" % (inp,i)): break
			print >> sys.stderr, "%s%d" % (inp,i)
			finput=open("%s%d" % (inp,i))
			check(finput,1000)

	####
	# check output
	####
	for j in range(1,11):
		base = os.path.join("test%d" % j)
		if not os.path.exists(base): break
		for i in xrange(1, 101):
			outp = os.path.join(base, "out")
			if not os.path.exists("%s%d" % (outp, i)): break
			print >> sys.stderr, "%s%d" % (outp, i)
			finput = open("%s%d" % (outp, i))
			check_output(finput)
			finput.close()
