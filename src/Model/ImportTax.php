<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container defines the type of import tax applicable to the order, and the
 * total amount of tax for all line items in the order.
 */
class ImportTax extends AbstractModel
{
    /**
     * The total amount of import tax for all line items of an order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $amount = null;

    /**
     * An enumeration value that indicates the type of import tax applicable to the
     * order. Currently, the only applicable import tax is the <i>Goods and
     * Services</i> tax (indicated with <code>GST</code>). The Goods and Services tax
     * is only applicable to orders for the eBay Australia marketplace. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:ImportTaxTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $importTaxType = null;
}
