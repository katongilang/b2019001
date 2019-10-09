<?php
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testOk(): void
    {
        $this->assertTrue(true);
    }

    public function testFailed(): void
    {
        $this->assertTrue(false);
    }
}






