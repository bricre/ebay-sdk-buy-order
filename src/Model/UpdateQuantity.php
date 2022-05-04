<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields used to update the quantity of a line item.
 */
class UpdateQuantity extends AbstractModel
{
    /**
     * A unique eBay-assigned ID value that identifies a line item in a purchase order.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * The number of individual items ordered in this line item, as specified by the
     * buyer.
     *
     * @var int
     */
    public $quantity = null;
}
