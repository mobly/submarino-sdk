<?php

namespace Gpupo\SubmarinoSdk\Entity\Order;

use Gpupo\CommonSdk\Entity\EntityAbstract;
use Gpupo\CommonSdk\Entity\EntityInterface;

class Order extends EntityAbstract implements EntityInterface
{
    public function getSchema()
    {
        return  [
            'id'            => 'string',
            'siteId'        => 'string',
            'store'         => 'string',
            'purchaseDate'  => 'string',
            'lastUpdate'    => 'string',
            'status'        => 'string',
            'invoiced'      => 'object',
        ];
    }
}
