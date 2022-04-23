# ![alt text](src/img/logo.png) Strategy in PHP

**Strategy** is a behavioral design pattern that turns a set of behaviors into objects and makes them interchangeable inside original context object. <br />The original object, called context, holds a reference to a strategy object and delegates it executing the behavior. In order to change the way the context performs its work, other objects may replace the currently linked strategy object with another one. <br /><br />

**Usage of the pattern in PHP** <br /><br />

**Complexity:** :star: <br />
**Popularity:** :star::star::star: <br /><br />

**Usage examples:** The Strategy pattern is often used in PHP code, especially when it?s necessary to switch algorithms at runtime. However, the pattern has a strong competitor represented by anonymous functions, introduced in PHP 5.3 in 2009.

**Identification:** Strategy pattern can be recognized by a method that lets nested object do the actual work, as well as the setter that allows replacing that object with a different one.

[**Learn more about Strategy**](https://refactoring.guru/design-patterns/strategy)
