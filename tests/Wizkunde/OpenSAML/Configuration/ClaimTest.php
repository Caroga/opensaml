<?php

namespace Wizkunde\OpenSAML\Configuration;

use Wizkunde\OpenSAML\Configuration\Claim;

class ClaimTest extends \PHPUnit_Framework_TestCase
{
    protected $claim = null;

    public function setUp()
    {
        $this->claim = new Claim();
    }

    public function testIfKeyIsProperlySet()
    {
        $this->claim->setKey('email');
        $this->assertEquals('email', $this->claim->getKey());
    }

    public function testIfValueIsProperlySet()
    {
        $this->claim->setValue('test@test.com');
        $this->assertEquals('test@test.com', $this->claim->getValue());
    }
}