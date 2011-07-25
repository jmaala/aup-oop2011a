from abc import *
#abc=Abstract Base Class

class Myclass:
	name=''
	def __init__(self,name):
		self.name=name
	__metaclass__=ABCMeta
	@abstractmethod
	def Mymethod(self):
		print "Jed"
		self.name="hoy"

class Newclass(Myclass):
	def Mymethod(self):
		self.name="hey"
	
		
ako=Newclass('jed')
ako.Mymethod()
print ako.name

