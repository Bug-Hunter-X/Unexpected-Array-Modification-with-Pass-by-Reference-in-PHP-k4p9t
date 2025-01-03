```php
function increment_array_values(array &$arr, int $increment): array
{
  foreach ($arr as &$value) {
    $value += $increment; 
  }
  return $arr; 
}

$numbers = [1, 2, 3, 4, 5];
$incrementedNumbers = increment_array_values($numbers, 1);
print_r($incrementedNumbers); //This will modify the original array

$moreNumbers = [6,7,8,9,10];
$moreIncrementedNumbers = increment_array_values($moreNumbers, 5);
print_r($moreIncrementedNumbers); // This will modify the original array

```