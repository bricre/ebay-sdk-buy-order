<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for the shipping information, such as delivery
 * date estimates and shipping provider.
 */
class ShippingDetail extends AbstractModel
{
    /**
     * The end of the date range in which the purchase order is expected to be
     * delivered to the shipping address (final destination).
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The beginning of the date range in which the purchase order is expected to be
     * delivered to the shipping address (final destination).
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * The shipping provider for the line item, such as FedEx or USPS.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The name of the shipping service option. For example, Priority Mail Express
     * (provided by USPS) or FedEx International Priority (Provided by FedEx).
     *
     * @var string
     */
    public $shippingServiceCode = null;
}
