<?php

use PHPUnit\Framework\TestCase;
include 'C:\Users\Assandra Work Laptop\Projects\interview-prep\test\Task1.php';

final class Task1Test extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Task1();
        $valueToTest = $greeter->maskify(55435);

        $this->assertSame('Hello, Alice!', $valueToTest);
    }
}

?>