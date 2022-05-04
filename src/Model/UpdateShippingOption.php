<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields used to update the shipping option of a line
 * item.
 */
class UpdateShippingOption extends AbstractModel
{
    /**
     * A unique eBay-assigned ID value that identifies the line item in a checkout
     * session.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * A unique ID for the selected shipping option/method.
     *
     * @var string
     */
    public $shippingOptionId = null;
}
