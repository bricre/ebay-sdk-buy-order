<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that identifies the seller.
 */
class Seller extends AbstractModel
{
    /**
     * The user name created by the seller for use on eBay.
     *
     * @var string
     */
    public $username = null;
}
