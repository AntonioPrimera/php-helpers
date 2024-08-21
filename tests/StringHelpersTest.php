<?php

/**
 * Test the following string helpers:
 * - kebabCase
 * - classBasename
 */

it('can convert a string to kebab-case', function () {
    expect(kebabCase('HelloWorld'))->toBe('hello-world')
        ->and(kebabCase('helloWorld'))->toBe('hello-world')
        ->and(kebabCase('hello-world'))->toBe('hello-world')
        ->and(kebabCase('hello world'))->toBe('hello-world')
        ->and(kebabCase('hello__world'))->toBe('hello-world')
        ->and(kebabCase('hello-_world'))->toBe('hello-world')
        ->and(kebabCase('hello--world'))->toBe('hello-world')
        ->and(kebabCase(' hello world '))->toBe('hello-world');
});

it('can get the class basename', function () {
    expect(classBasename('AntonioPrimera\FileSystem\FileSystemItem'))->toBe('FileSystemItem')
        ->and(classBasename(new \AntonioPrimera\PhpHelpers\Tests\Context\SampleClass()))->toBe('SampleClass');
});
