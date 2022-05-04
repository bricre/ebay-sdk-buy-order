<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for a line item.
 */
class LineItemInput extends AbstractModel
{
    /**
     * The unique eBay-assigned identifier of an item. This ID is returned by the
     * <b>Browse</b> and <b>Feed</b> API methods. The ID must be in RESTful item ID
     * format.<br /><br /><b>For example:</b> <code>v1|2**********6|5**********4</code>
     * or <code>v1|1**********9|0</code>.<br /><br />For more information about item
     * IDs for RESTful APIs, see <a
     * href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API
     * compatibility</a>.<br /><br />Each <b>itemId</b> will become a single line
     * item.<br /><br /><b>Maximum:</b>10 per checkout.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The quantity ordered in this line item.
     *
     * @var int
     */
    public $quantity = null;
}
