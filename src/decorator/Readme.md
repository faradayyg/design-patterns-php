# The Decorator pattern

The Decorator Pattern attaches additional
responsibilities to an object dynamically.
Decorators provide a flexible alternative to
subclassing for extending functionality

To demonstrate this pattern we will be using a rice shop example

You can order plain white rice, jollof or fried rice or white rice with stew or white rice with stew and meat
and vegetables... You get the idea.

## Logical organization:
The rice and condiment classes are all `Consumables` and will be organized as so:

### Rice types (Base Classes)
- White Rice
- Jollof Rice
- Fried Rice
- Coconut Rice

### Condiments/additions (Decorators)
- Beef
- Stew
- Chicken
- Vegetables
