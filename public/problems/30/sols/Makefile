# Makefile for ICPC ACM2006 South American Regionals
# r. anido

ifeq "$(findstring apple,$(shell /bin/bash --version))" ""
TIME = /usr/bin/time -f "%Uu %Ss"
else
TIME = /usr/local/bin/time -f "%Uu %Ss"
endif

CC = gcc -Wall -O2 -std=c99 -lm
CPP = g++ -Wall -O2 -lm
LD_FLAGS = -lm 
CXXFLAGS = -Wall -O2
 
.SUFFIXES: .java .class .cpp

DIFF = diff -q 
TESTS = ../../tests
CPROGS := $(patsubst %.c,%,$(wildcard *.c))
CCPROGS := $(patsubst %.cc,%,$(wildcard *.cc))
CPPPROGS := $(patsubst %.cpp,%,$(wildcard *.cpp))
JCLASSES := $(patsubst %.java,%.class,$(wildcard *.java))
PROGSJ := $(patsubst %.java,%,$(wildcard *.java))

PROGS = $(CPROGS) $(CCPROGS) $(CPPPROGS)

DIR := $(shell (cd ../..; pwd))
NAME := $(shell basename $(DIR))

all:	$(PROGS) $(JCLASSES)

time: $(JCLASSES) $(PROGS)
	@$(foreach file, $(PROGSJ), echo $(file) "(java)" ; $(TIME) java -Xmx512m -Xms512m $(file) < $(TESTS)/$(NAME).in > /tmp/$(NAME).out; echo;)
	@$(foreach file, $(CPROGS), echo $(file) "(C)"; $(TIME) ./$(file) < $(TESTS)/$(NAME).in > /tmp/$(NAME).out; echo;)
	@$(foreach file, $(CCPROGS) $(CPPPROGS), echo $(file) "(C++)"; $(TIME) ./$(file) < $(TESTS)/$(NAME).in > /tmp/$(NAME).out; echo;)

diff: $(JCLASSES) $(JCLASSES)
	@$(foreach file, $(PROGSJ),  echo $(file) "(java)"; java -Xmx512m -Xms512m $(file) < $(TESTS)/$(NAME).in | $(DIFF) -  $(TESTS)/$(NAME).sol;)
	@$(foreach file, $(CPROGS),  echo $(file) "(C)"; ./$(file) < $(TESTS)/$(NAME).in | $(DIFF) -  $(TESTS)/$(NAME).sol;)
	@$(foreach file, $(CCPROGS) $(CPPPROGS),  echo $(file) "(C++)"; ./$(file) < $(TESTS)/$(NAME).in | $(DIFF) -  $(TESTS)/$(NAME).sol;)

sol: $(PROGS)
	echo makesols.py $< 

clean:
	rm -f *~ *.o *.class $(PROGS) $(PROGSJ)

# suffix rules
.java.class:
	javac $<

.cpp.*:
	$(CPP) -o $@ -Wall -O2 -lm 
