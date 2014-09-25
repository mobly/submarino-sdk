<?php

namespace Gpupo\Tests\SubmarinoSdk\Entity\Order;

use Gpupo\Tests\TestCaseAbstract;
use Gpupo\SubmarinoSdk\Entity\Order\Manager;

abstract class OrderTestCaseAbstract extends TestCaseAbstract
{
    protected function factoryManager()
    {
        return new Manager($this->factoryClient());
    }
    
    protected function getList()
    {
        return $this->factoryManager()->fetch();
    }
}
