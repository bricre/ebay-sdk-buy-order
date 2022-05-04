<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for the shipping options.
 */
class ShippingOption extends AbstractModel
{
    /**
     * The delivery cost using this shipping option, for this line item, before any
     * delivery discounts are applied.<br /><br /><span class="tablenote"><b>Note:</b>
     * The cost includes the value-added tax (VAT) for applicable jurisdictions when
     * requested from supported marketplaces. In this case, users must pass the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>) to see VAT-inclusive pricing. For more information on VAT,
     * refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $baseDeliveryCost = null;

    /**
     * The monetary value of any delivery discounts.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $deliveryDiscount = null;

    /**
     * The <a
     * href="https://pages.ebay.com/seller-center/shipping/global-shipping-program.html">Global
     * Shipping Program</a> import charges for this line item.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $importCharges = null;

    /**
     * The end of the date range in which the purchase order is expected to be
     * delivered to the shipping address.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The beginning of the date range in which the purchase order is expected to be
     * delivered to the shipping address.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * A field that indicates whether the shipping method is selected.
     *
     * @var bool
     */
    public $selected = null;

    /**
     * The shipping provider for the line item, such as FedEx or USPS.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * A unique ID for the selected shipping option/method.
     *
     * @var string
     */
    public $shippingOptionId = null;

    /**
     * The name of the shipping service code. For example, Priority Mail Express
     * (provided by USPS) or FedEx International Priority (Provided by FedEx).
     *
     * @var string
     */
    public $shippingServiceCode = null;
}
