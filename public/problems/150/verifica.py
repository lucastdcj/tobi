#!/usr/bin/python
import os, commands

def func(arg, dirname, fnames):
	print "---"
	print dirname
	for i in fnames:
		if i.startswith("in"):
			print "arquivo %s" % (i[2])
#			output = commands.getoutput("./wiki < %s/%s" % (dirname, i))
			print commands.getoutput("time ./wiki < %s/%s > /dev/null" % (dirname, i))
#			print output
#			f = open ("%s/out%s" % (dirname, i[2]), "w+");
#			f.write(output)
#			f.write("\n")
#			f.close()
			output = commands.getoutput("./wiki-stein < %s/%s" \
										"| diff - %s/out%s"\
										% (dirname, i, dirname, i[2]))
			if output == "":
					print "OK-meu"
			else:
				print "Nao OK-meu"
				print output

os.path.walk("./", func, None)

