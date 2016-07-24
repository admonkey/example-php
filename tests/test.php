<?php
    require __DIR__ .'/../vendor/autoload.php';

    class Test extends PHPUnit_Framework_TestCase
    {

        public function testExample()
        {
            $this->assertFalse(Example\Example::go());
        }

        public function testExampleTrue()
        {
            $this->assertTrue(Example\Example::go(true));
        }

    }
?>
