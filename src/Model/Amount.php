<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A container defining the monetary value of an amount, in the currency used on
 * the eBay site that offers the item, and the conversion of that value into
 * another currency.
 */
class Amount extends AbstractModel
{
    /**
     * The currency used in the monetary transaction. Generally, this is the currency
     * used by the country of the eBay site offering the item. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The amount of the currency specified in the <b>currency</b> field. The value of
     * the <b>currency</b> defaults to the standard currency used by the country of the
     * eBay site offering the item.
     *
     * @var string
     */
    public $value = null;
}
