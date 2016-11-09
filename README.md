DateTimeConvert
=====================

Usage
-----

```php
<?php

use FLE\DateTimeConvert\LdlmToMoment;
$formatter = \IntlDateFormatter::create(null, \IntlDateFormatter::SHORT, \IntlDateFormatter::NONE);
$ldlmPattern = $formatter->getPattern();
$momentJsPattern = LdlmToMoment::convert($ldlmPattern);
```

Installation
------------

Add to your `composer.json` file:

```json
{
    "require": {
        "fle/date-time-convert": "dev-master"
    }
}
```
