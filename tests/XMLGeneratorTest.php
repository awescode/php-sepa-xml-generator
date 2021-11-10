<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SEPA\XMLGenerator;

class XMLGeneratorTest extends TestCase
{
    public function testOne()
    {
        $xmlGenerator = new XMLGenerator();

        $this->assertTrue($xmlGenerator instanceof XMLGenerator);
    }
}
