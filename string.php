<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Counting the vowels
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $vowelCount++;
        }
    }

    // String reversing
    $reversedString = strrev($string);

    // Result printing
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n\n";
}
