from Person import *
import random

class Warrior(Person):
	damage=10
	def attack(self,target):
		attack=0
		x=0
		x=random.randint(1, 3)
		if(x==1):
			attack=self.damage
			target.health=target.health-attack
		if(x==2):
			print "Miss!"
		if(x==3):
			attack=self.damage+self.damage*0.3
			target.health=target.health-attack
		print "%s attacks %s damage: %d\n%s's Health:%d" % (self.name, target.name, attack, target.name, target.health)
