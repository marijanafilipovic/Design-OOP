# Combined Design Patterns with OOP Principles

This document outlines how various **Design Patterns** are integrated with **Object-Oriented Programming (OOP)** principles. Specifically, we will explore the use of the **Strategy**, **Factory**, **State**, and **Singleton** design patterns, and how they can be combined effectively in software design.

## Design Patterns

### 1. **Strategy Pattern**
The **Strategy Pattern** is a behavioral design pattern that allows the algorithm to be selected at runtime. This pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable. The **Strategy Pattern** allows a client to choose an algorithm from a family of algorithms without changing the code that uses the algorithm.

#### Key Points:
- Defines a set of algorithms.
- Encapsulates each algorithm.
- Allows the algorithm to be chosen at runtime.

#### Example Use Case:
In a payment processing system, different strategies can be used based on the selected payment method (Credit Card, PayPal, etc.).

### 2. **Factory Pattern**
The **Factory Pattern** is a creational design pattern that provides an interface for creating objects in a super class but allows subclasses to alter the type of objects that will be created. It abstracts the instantiation process, allowing the system to work with different types of objects without knowing their concrete class.

#### Key Points:
- Abstracts the creation process of objects.
