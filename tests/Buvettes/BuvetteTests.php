<?php

/**
 * php ./vendor/bin/phpunit .\tests\BuvetteTests.php
 */

namespace Buvette\tests;

    use Buvettes\BuvFonctions;

class BuvetteTests extends \PHPUnit\Framework\TestCase {
    
    /** @test */
    public function testPHPUnit() {
        $string1 = 'test';
        $string2 = 'test';

        $this->assertSame($string1, $string2); // retourne OK
    }

    /** @test */
    public function testCheckAge() {

        $buvette = new BuvFonctions();
        $buvette->CheckAge('1990-08-15');

        $this->assertEquals($buvette, 32);
    }


}