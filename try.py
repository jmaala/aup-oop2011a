class base1:
	name=''
	def __init__(self,name):
		self.name=name
	def change(self,name):
		self.name='jed'

class base2:
	name=''
	def __init__(self,name):
		self.name=name
	def change(self,name):
		self.name='heheh'

class base3(base1,base2):
	pass

ako=base3('lol')
ako.change(ako.name)
print ako.name
