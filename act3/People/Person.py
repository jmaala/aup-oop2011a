class Person():
	max_health=100
	health=100
	name=''
	food=0
	max_health=100
	def __init__(self,name):
		self.name=name
	def eat(self,food):
		self.health=self.health+food
		if (self.health>=max_health):
			self.health=max_health
		if (self.health<=0):
			self.health=0
	def is_alive(self):
		if(self.health > 0):
		    return True
		return False
