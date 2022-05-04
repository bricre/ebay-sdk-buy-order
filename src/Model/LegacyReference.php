<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields to support using the <a
 * href="https://developer.ebay.com/devzone/post-order/index.html#callindex">Post
 * Order API</a> for returns and cancellations.<br /><br /><b> Restriction:</b> The
 * Post Order API can be used only with eBay member checkouts.
 */
class LegacyReference extends AbstractModel
{
    /**
     * The legacy ID used to identify an item.<br /><br />This is used by the Post
     * Order API <a
     * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_return__post.html"
     * target="_blank">Create Return Request</a> method. This call initiates the item
     * return process. For more information on how to use this field in the Post Order
     * API, see <a href="/api-docs/buy/static/api-order.html#return-request">Create a
     * return request</a> in the Buy Integration Guide.<br /><br /><b> Restriction:</b>
     * The Post Order API can be used only with eBay member checkouts.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * The legacy ID of the order.<br /><br />This is used by the Post Order API <a
     * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html"
     * target="_blank">Submit Cancellation Request</a> method. This method initiates
     * the item cancellation process. For more information on how to use this field in
     * the Post Order API, see <a
     * href="/api-docs/buy/static/api-order.html#using">Using the Post Order
     * API</a>.<br /><br /><b>Restriction:</b> The Post Order API can be used only with
     * eBay member checkouts.
     *
     * @var string
     */
    public $legacyOrderId = null;

    /**
     * The legacy ID of the transaction.<br /><br />This is used by the Post Order API
     * <a
     * href="https://developer.ebay.com/devzone/post-order/post-order_v2_return__post.html"
     * target="_blank">Create Return Request</a> call. This call initiates the item
     * return process. For more information on how to use this field in the Post Order
     * API, see <a href="/api-docs/buy/static/api-order.html#using">Using the Post
     * Order API</a> in the Buy Integration Guide.<br /><br /><b>Restriction:</b> The
     * Post Order API can be used only with eBay member checkouts.
     *
     * @var string
     */
    public $legacyTransactionId = null;
}
