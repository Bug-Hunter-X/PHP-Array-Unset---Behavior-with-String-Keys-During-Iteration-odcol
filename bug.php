In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
<?php
$myArray = array("a" => 1, "b" => 2, "c" => 3);

foreach ($myArray as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
  if ($key == "b") {
    unset($myArray[$key]); //Remove element with key 'b'
  }
}

foreach ($myArray as $key => $value) { //Iterate after removing element
  echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```

You might expect the second loop to skip the element with key "b". However, due to the way PHP's internal array handling works with string keys and `unset()`,  the array's internal pointer might not behave as expected, leading to unexpected output or skipped elements.  This is particularly problematic in nested loops or more complex array manipulations.