import random
import os

LETTERS = 'ABCDEFGHIJKLMNOPRSTUVWXY'
DIGITS  = '0123456789'

for k in range(1,21):
	for p in range(1,4):
		N = random.randint(2, 4)
		L = []
		for i in range(N):
			s = ''
			for j in range(random.randint(1, 3)):
				s += random.choice(LETTERS + DIGITS)
			L.append(s)
		out = '-'.join(L)
		os.system("echo %s > test%d/in%d" % (out,k,p))
		os.system("./telefone %s < test%d/in%d > test%d/out%d" % (out,k,p,k,p))


