<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that returns cost details for all of the line items in the order, such as
 * tax, item price, delivery cost, and discounts.
 */
class PricingSummaryV2 extends AbstractModel
{
    /**
     * The total amount of the coupon discounts in the purchase order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $additionalSavings = null;

    /**
     * The total amount of any seller adjustments. An adjustment can be a credit or
     * debit. This is used to catch any monetary changes to the order that are not
     * already captured in one of the other fields.
     *
     * @var \Ebay\Buy\Order\Model\Adjustment
     */
    public $adjustment = null;

    /**
     * The delivery cost for all of the line items, after any delivery discounts are
     * applied.<br /><br />For example, there are four line items, and the delivery
     * cost for each line item is $5. One of the line items qualifies for free
     * delivery. The <b>deliveryCost</b> would be $15, which is the total cost for
     * delivering all of the line items after the discount is applied.<br /><br /><span
     * class="tablenote"><b>Note:</b> The cost includes the value-added tax (VAT) for
     * applicable jurisdictions when requested from supported marketplaces. In this
     * case, users must pass the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>) to see VAT-inclusive pricing. For more information on VAT,
     * refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $deliveryCost = null;

    /**
     * The total amount of any fees for all the line items in the order, such as a
     * recycling fee.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $fee = null;

    /**
     * The sum of all <a
     * href="https://pages.ebay.com/seller-center/shipping/global-shipping-program.html">Global
     * Shipping Program</a> import charges, for all the line items in the order.
     *
     * @var \Ebay\Buy\Order\Model\ImportChargesV2
     */
    public $importCharges = null;

    /**
     * The type of import tax applicable to the order, and the total amount of tax for
     * all line items in the order.
     *
     * @var \Ebay\Buy\Order\Model\ImportTax
     */
    public $importTax = null;

    /**
     * The total discount amount for all line items in the order.<br /><br />For
     * example, there are four line items in the order. Two of the line items qualify
     * for a <i>Buy 1, Get 1</i> offer, which is a $6 and a $15 discount. The
     * <b>priceDiscount</b> value returned would be 21, which is the total of the two
     * discounts.<br /><br /><span class="tablenote"><b>Note:</b> Delivery discount
     * amounts, if applicable, are not reflected in the value returned in this
     * field.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $priceDiscount = null;

    /**
     * The total cost for all line items in the order, taking into account the item
     * quantity, but before adding taxes and delivery costs, or applying discounts,
     * fees, and adjustments.<br /><br /><span class="tablenote"><b>Note:</b> The price
     * includes the value-added tax (VAT) for applicable jurisdictions when requested
     * from supported marketplaces. In this case, users must pass the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>) to see VAT-inclusive pricing. For more information on VAT,
     * refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $priceSubtotal = null;

    /**
     * The total amount of taxes for all line items in the order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $tax = null;

    /**
     * The total cost of the order, which includes: (<b>priceSubtotal</b> -
     * <b>priceDiscount</b>) + <b>deliveryCost</b> + <b>tax</b> +/- <b>adjustment</b> +
     * <b>fee</b> + <b>importCharges</b> - <b>additionalSavings</b>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $total = null;
}
