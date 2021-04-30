<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertFileEqualsTest extends TestCase
{
    public function testAssertFileEquals()
    {
        $file1 = dirname(__DIR__) . '/samples/file-1.php';
        $file2 = dirname(__DIR__) . '/samples/file-2.php';

        $this->assertFileEquals($file1, $file2);
    }

    public function testAssertFileNotEquals()
    {
        $file1 = dirname(__DIR__) . '/samples/file-1.php';
        $file3 = dirname(__DIR__) . '/samples/file-3.php';

        $this->assertFileNotEquals($file1, $file3);
    }
}
