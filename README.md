# Test case for rector rule OptionalParametersAfterRequiredRector

The code contains following hierarchy of classes:

```mermaid
---
title: Classes hierarchy
---
classDiagram
    AbstractGadget <|-- DoubleGadget
    AbstractGadget <|-- MultiplierGadget
    AbstractGadget: +apply(float $multiplier, int $value)
    MultiplierGadget: +apply(float $multiplier, int $value)
    DoubleGadget: +apply(float $multiplier = 2.0, int $value)
```

One of the classes defines not last parameter of inherited method to be optional, which is deprecated in 8.0.
In this case rector fixes the child class method, but neither the parent method definition, nor all sibling classes to
follow that change.
