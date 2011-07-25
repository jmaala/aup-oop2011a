class Person():
	health=100
	name=''
	food=0
	max_health=100
	def __init__(self,name,health):
		self.health=health
		self.name=name
	def eat(self,food,max_health):
		self.health=self.health+food
		if (self.health>=max_health):
			self.health=max_health
		if (self.health<=0):
			self.health=0

