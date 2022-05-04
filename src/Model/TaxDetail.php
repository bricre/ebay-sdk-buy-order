<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the tax fields.
 */
class TaxDetail extends AbstractModel
{
    /**
     * A field that indicates whether tax was applied for the cost of the item and its
     * shipping.
     *
     * @var bool
     */
    public $includedInPrice = null;

    /**
     * A container that returns the tax jurisdiction information.
     *
     * @var \Ebay\Buy\Order\Model\TaxJurisdiction
     */
    public $taxJurisdiction = null;

    /**
     * A field that indicates the type of tax that may be collected for the item. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:TaxType'>eBay API
     * documentation</a>.
     *
     * @var string
     */
    public $taxType = null;
}
