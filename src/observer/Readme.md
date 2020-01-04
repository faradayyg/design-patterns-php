# The Observer pattern

The Observer Pattern defines a one-to-many
dependency between objects so that when one
object changes state, all of its dependents are
notified and updated automatically.

Here I will implement the observer pattern using a simple application:

I will have a bank Class (the subject) and other dependants that listen for changes on the bank class.

- Bank Class (Subject/Observable)
- User Class (Dependant/Observer)
- Cashier Class (Dependant/Observer)