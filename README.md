# PHP Pass-by-Reference Bug

This repository demonstrates a common error in PHP involving unexpected array modification due to pass-by-reference.  The `increment_array_values` function, while seemingly returning a new array, modifies the original array passed as an argument.  This can lead to subtle and hard-to-debug errors in larger applications.

## The Problem

PHP's `&` symbol in function parameters indicates pass-by-reference.  This means the function operates directly on the original variable, not a copy.  In the example, the `foreach` loop modifies the array elements in place, leading to the original array being changed.

## The Solution

The solution involves creating a copy of the array before modifying it within the function.  This ensures that the original array remains unchanged, preventing unexpected side effects.