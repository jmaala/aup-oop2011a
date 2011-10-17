#!/usr/bin/env python
from __future__ import generators
from SimPy import Simulation
from SimPy.Simulation import hold, request, release, now
from SimPy.Simulation import Monitor
import random
from math import sqrt

AISLES = 5         # Number of open aisles
ITEMTIME = 0.1     # Time to ring up one item
AVGITEMS = 20      # Average number of items purchased
CLOSING = 60*12    # Minutes from store open to store close
AVGCUST = 1500     # Average number of daily customers
RUNS = 10          # Number of times to run the simulation

class Customer(Simulation.Process):
    def __init__(self):
        Simulation.Process.__init__(self)
        # Randomly pick how many items this customer is buying
        self.items = 1 + int(random.expovariate(1.0/AVGITEMS))
    def checkout(self):
        start = now()           # Customer decides to check out
        yield request, self, checkout_aisle
        at_checkout = now()     # Customer gets to front of line
        waittime.tally(at_checkout-start)
        yield hold, self, self.items*ITEMTIME
        leaving = now()         # Customer completes purchase
        checkouttime.tally(leaving-at_checkout)
        yield release, self, checkout_aisle

class Customer_Factory(Simulation.Process):
    def run(self):
        while 1:
            c = Customer()
            Simulation.activate(c, c.checkout())
            arrival = random.expovariate(float(AVGCUST)/CLOSING)
            yield hold, self, arrival

class Monitor2(Monitor):
    def __init__(self):
        Monitor.__init__(self)
        self.min, self.max = (int(2**31-1),0)
    def tally(self, x):
        Monitor.tally(self, x)
        self.min = min(self.min, x)
        self.max = max(self.max, x)
        
				
for run in range(RUNS):
    waittime = Monitor2()
    checkouttime = Monitor2()
    checkout_aisle = Simulation.Resource(AISLES)
    Simulation.initialize()
    cf = Customer_Factory()
    Simulation.activate(cf, cf.run(), 0.0)
    Simulation.simulate(until=CLOSING)

    #print "Customers:", checkouttime.count()
    print "Waiting time average: %.1f" % waittime.mean(), \
          "(std dev %.1f, maximum %.1f)" % (sqrt(waittime.var()),waittime.max)
    #print "Checkout time average: %1f" % checkouttime.mean(), \
    #      "(standard deviation %.1f)" % sqrt(checkouttime.var())

print 'AISLES:', AISLES, '  ITEM TIME:', ITEMTIME
