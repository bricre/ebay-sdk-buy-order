<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A breakdown of the fees associated with the line item.
 */
class Fee extends AbstractModel
{
    /**
     * A container for the currency type and monetary amount of the fee associated with
     * the line item.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $amount = null;

    /**
     * The type of fee associated with the line item. For implementation help, refer to
     * <a href='https://developer.ebay.com/api-docs/buy/order/types/gct:FeeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $feeType = null;
}
