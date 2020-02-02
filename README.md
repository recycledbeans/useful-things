# Useful Things for PHP

A collection of helpers and useful things for developing PHP applications.

## Installation

Use composer to include the latest version.

```bash

composer require recycledbeans/useful-things

```

## Money

Contains a helpful trait to use when converting monetary values back and forth between float values (for display) and integer values (for storage and arithmetic).

The example below is a Laravel Eloquent model that has an accessor that formats the amount to a float value from how it is stored in the database (as an integer) when the attribute is accessed, and a mutator that sets the value back to an integer value before it is stored in the database.

```php

<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use RecycledBeans\Helpers\HasMoney;

class Order extends Model 
{

  use HasMoney;  
  
  public function getTotalAttribute($value)
  {
    // Converts the 2512 stored in the database to 25.12
    return $this->toFloat($value);
  }
  
  public function setTotalAttribute($value)
  {
    // Stores 52.60 as 5260 for storage in the database
    $this->attributes['total'] = $this->toInteger($value);
  }

}

```

You can also use helpful aliases providing the same functionality.

```php
(new Money)->toPennies('25.12'); // 2512

(new Money)->toDollars(2512); // '25.12'

```
