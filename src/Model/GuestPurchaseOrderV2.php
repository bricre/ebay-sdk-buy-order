<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for a guest purchase order.
 */
class GuestPurchaseOrderV2 extends AbstractModel
{
    /**
     * An array of line items in the order.
     *
     * @var \Ebay\Buy\Order\Model\OrderLineItemV2[]
     */
    public $lineItems = null;

    /**
     * A container that breaks down the costs for the order, including total cost,
     * shipping cost, tax, fees, and any discounts.
     *
     * @var \Ebay\Buy\Order\Model\PricingSummary
     */
    public $pricingSummary = null;

    /**
     * The creation date of the purchase order.
     *
     * @var string
     */
    public $purchaseOrderCreationDate = null;

    /**
     * The unique identifier of the purchase order.
     *
     * @var string
     */
    public $purchaseOrderId = null;

    /**
     * A container that returns the payment status for the purchase order. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:PurchaseOrderPaymentStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $purchaseOrderPaymentStatus = null;

    /**
     * An enumeration value that indicates the current status of the buyer's payment
     * and any refund that applies to the purchase order. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:PurchaseOrderStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $purchaseOrderStatus = null;

    /**
     * The total amount of any refunds for the purchase order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $refundedAmount = null;

    /**
     * A container for any warning messages.
     *
     * @var \Ebay\Buy\Order\Model\Error[]
     */
    public $warnings = null;
}
