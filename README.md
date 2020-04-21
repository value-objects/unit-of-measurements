# Unit of Measures in PHP
A library for Unit of Measurements written in PHP.

Installation:
```php
composer require codingmatters/unit-of-measures
```

### Units for Mass

Using ```Weight::class```  in measuring the mass. Following are practical usage for the weight object.

```php
use CodingMatters\UoM\Weight;

$weightInGrams = Weight::inGrams(1000);
$weightInPounds = Weight::inPounds(250);
$weightInOunce = Weight::inOunch(350);
```

#### Weight In Grams
```php
use CodingMatters\UoM\Weight;

$weight = Weight::inGrams(1000); // will return string "1000 g"
$weight->unit(); // will return g
$weight->value(); // will return 1000

/**
 * Available conversion method:
 */
$weightInKilos = $weight->toKilo(); // will return string as "1 kg"
$weightInPounds = $weight->toPounds(); // will return string as ""

// you can still use the unit() and value() methods after conversion
$weightInKilos->unit(); // will return kg
$weightInKilos->value(); // will return 1
```
# Contributions
Developed by [Gab Amba](https://github.com/gabbydgab) and maintained by [Coding Matters Software Development Services](https://codingmatters.today)

We thank all the [contributors](https://github.com/CodingMatters/community-crisis-response-and-monitoring-system/graphs/contributors) who made this project possible.

# Security and Vulnerabilities
If you discover a security vulnerability within this library, please send an email to Gab Amba via [support@codingmatters.today](mailto:support@codingmatters.today). All security vulnerabilities will be promptly addressed. 

# License
    Copyright (C) 2020  Coding Matters Software Development Services

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.