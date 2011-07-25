from People.Person import *
from People.Warrior import *
from People.Ninja import *

naruto=Warrior('naruto')
sasuke=Ninja('sasuke')

while(naruto.is_alive() and sasuke.is_alive()):
    sasuke.attack(naruto)
    if(naruto.is_alive()):
        naruto.attack(sasuke)

if(naruto.is_alive() and not sasuke.is_alive()):
    print naruto.name + " wins!"
else:
    print sasuke.name + " wins!"
