<?php

function kebabCase(string $string): string
{
    // Replace any non-alphanumeric characters with hyphens
    $string = preg_replace('/[^a-zA-Z0-9]+/', '-', $string);

    // Handle CamelCase by inserting hyphens before uppercase letters
    $string = preg_replace('/(?<!^)[A-Z]/', '-$0', $string);

    // Convert to lowercase to handle any uppercase letters
    $string = strtolower($string);

    // Remove leading and trailing hyphens
    return trim($string, '-');
}

function classBasename(mixed $classOrObject): string
{
    $class = is_object($classOrObject) ? get_class($classOrObject) : $classOrObject;

    return basename(str_replace('\\', '/', $class));
}
