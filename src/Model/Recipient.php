<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A container that defines the full name of the person receiving the purchase
 * order.
 */
class Recipient extends AbstractModel
{
    /**
     * The first name of the person receiving the purchase order.
     *
     * @var string
     */
    public $firstName = null;

    /**
     * The last name of the person receiving the purchase order.
     *
     * @var string
     */
    public $lastName = null;
}
