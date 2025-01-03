```php
function increment_array_values(array $arr, int $increment): array
{
  $arrCopy = $arr; // Create a copy of the input array
  foreach ($arrCopy as &$value) {
    $value += $increment;
  }
  return $arrCopy; // Return the modified copy
}

$numbers = [1, 2, 3, 4, 5];
$incrementedNumbers = increment_array_values($numbers, 1);
print_r($numbers); // Original array remains unchanged
print_r($incrementedNumbers); // Modified copy is returned

$moreNumbers = [6,7,8,9,10];
$moreIncrementedNumbers = increment_array_values($moreNumbers, 5);
print_r($moreNumbers); // Original array remains unchanged
print_r($moreIncrementedNumbers); // Modified copy is returned

```