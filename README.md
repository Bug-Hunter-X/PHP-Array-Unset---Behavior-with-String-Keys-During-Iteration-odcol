# PHP Array Unset() Gotcha with String Keys

This repository demonstrates a subtle but important quirk in PHP's array handling.  When you use `unset()` within a `foreach` loop on an array with string keys, the array's internal pointer might not advance predictably. This can lead to unexpected results, skipping elements or producing incorrect output.

The `bug.php` file shows a simple example illustrating this behavior.  The `bugSolution.php` file provides a corrected approach using alternative array manipulation techniques.

This issue highlights the need for careful consideration when modifying arrays during iteration in PHP, especially when dealing with associative arrays.