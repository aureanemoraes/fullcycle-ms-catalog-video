<?php

use Core\Main;
use PHPUnit\Framework\TestCase;

class MainUnitTest extends TestCase {
    public function test_foo_method() {
        $main = new Main();

        $result = $main->foo();

        $this->assertEquals("foo", $result);
    }
}