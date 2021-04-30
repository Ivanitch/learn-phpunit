<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertFileIsReadableTest extends TestCase
{
    public function testAssertFileIsReadable()
    {
        $file = dirname(__DIR__) . '/samples/file-1.php';

        $this->assertFileIsReadable($file);
    }
}
