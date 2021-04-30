<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertFileExistsTest extends TestCase
{
    public function testAssertFileExists()
    {
        $file = dirname(__DIR__) . '/samples/file-1.php';

        $this->assertFileExists($file);
    }
}
