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
me=Person('Jed',100)
print "Name: %s\nHealth: %i" % (me.name, me.health)

#create a class called Food
#if you pass it to the Person.eat method, the health of the person object should increase Person's health should have a maximum.

class Food():
	value=0;
	food=''
	def __init__(self,food,value):
		self.food=food
		self.value=value

food=Food('kanin',10)
poison=Food('lason',-10)
me=Person('Jed',100)
me.eat(poison.value,100)
print "Health is %s" % (me.health)
me.eat(food.value,100)
print "Health is %s" % (me.health)
