The solution is to use strict comparison (`===`) instead of loose comparison (`==`) to ensure that the type and value are both identical.

```php
function checkValue($value) {
  if ($value === 1 || $value === '1') {
    return true;
  } else {
    return false;
  }
}

//Now only strictly equal values evaluate to true
var_dump(checkValue(1)); // true
var_dump(checkValue('1')); // true
var_dump(checkValue('1.0')); // false
var_dump(checkValue(true)); // false
```
By using strict comparison, the function now correctly identifies only the values '1' and 1 as matching, preventing unexpected behavior.