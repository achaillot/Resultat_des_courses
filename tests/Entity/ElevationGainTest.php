<?php

namespace App\tests\Entity;

use App\Entity\Race;
use Monolog\Test\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ElevationGainTest extends KernelTestCase
{
    public function testElevationGain()
    {
        $race = (new Race())
            ->setVerticalGain('111111')
            ->setName('Test name')
            ->setDate(new \DateTime());
        
            self::bootKernel();
        
        $error = self::$container->get('validator')->validate($race);

        $this->assertCount(0, $error);
    }
}

