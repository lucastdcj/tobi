#!/usr/bin/python
import os, commands

def func(arg, dirname, fnames):
	print "---"
	print dirname
	for i in fnames:
		if i.startswith("in"):
			print "arquivo %s" % (i[2])
			print commands.getoutput("time ./perdida < %s/%s" % (dirname, i))
			output = commands.getoutput("./perdida_demasi < %s/%s" \
										"| diff - %s/out%s"\
										% (dirname, i, dirname, i[2]))
			if output == "":
					print "OK-meu"
			else:
					print "Nao OK-meu"					
					print (output)
os.path.walk("./", func, None)

