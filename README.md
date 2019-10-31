# Useful Things for PHP

A collection of helpers and useful things for developing PHP applications.

## Installation

Use composer to include the latest version.

```bash

composer require recycledbeans/useful-things

```

## Money

Common methods for converting monetary values back and forth between float values (for display) and integer values (for storage and arithmetic).

```php

(new Money)->toInteger('25.12'); // 2512

(new Money)->toFloat(2512); // '25.12'

```

You can also use helpful aliases providing the same functionality.

```php

(new Money)->toPennies('25.12'); // 2512

(new Money)->toDollars(2512); // '25.12'

```
