<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Guest session response v2.
 */
class GuestCheckoutSessionResponseV2 extends AbstractModel
{
    /**
     * A container that returns the information for the coupons that were applied in
     * the guest checkout session.
     *
     * @var \Ebay\Buy\Order\Model\Coupon[]
     */
    public $appliedCoupons = null;

    /**
     * The eBay-assigned guest checkout session ID. This ID is created after a
     * successful <b>initiateGuestCheckoutSession</b> call.
     *
     * @var string
     */
    public $checkoutSessionId = null;

    /**
     * An array of line items associated with the guest checkout session.
     *
     * @var \Ebay\Buy\Order\Model\LineItem[]
     */
    public $lineItems = null;

    /**
     * A container that breaks down the costs for the order, including total cost,
     * shipping cost, tax, fees, and any discounts.
     *
     * @var \Ebay\Buy\Order\Model\PricingSummaryV2
     */
    public $pricingSummary = null;

    /**
     * A container that returns the address to which the purchase order will be
     * shipped.
     *
     * @var \Ebay\Buy\Order\Model\ShippingAddress
     */
    public $shippingAddress = null;

    /**
     * An array of errors or warnings that were generated during the method processing.
     *
     * @var \Ebay\Buy\Order\Model\Error[]
     */
    public $warnings = null;
}
