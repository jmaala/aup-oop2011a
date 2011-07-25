import People
import Foods
from People.Person import *
from Foods.Food import *

me=Person('Jed',100)
print "Name: %s\nHealth: %i" % (me.name, me.health)
food=Food('kanin',10)
poison=Food('lason',-10)
me.eat(poison.value,100)
print "You've Ate lason!\nHealth is %s" % (me.health)
me.eat(poison.value,100)
print "You've Ate lason!\nHealth is %s" % (me.health)
me.eat(poison.value,100)
print "You've Ate lason!\nHealth is %s" % (me.health)
me.eat(food.value,100)
print "You've Ate kanin!\nHealth is %s" % (me.health)
