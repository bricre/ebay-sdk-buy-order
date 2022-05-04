<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that provides region details for a tax jurisdiction.
 */
class Region extends AbstractModel
{
    /**
     * A localized text string that indicates the name of the region. Taxes are
     * generally charged at the state/province level, or at the country level in the
     * case of VAT tax.
     *
     * @var string
     */
    public $regionName = null;

    /**
     * An enumeration value that indicates the type of region for the tax
     * jurisdiction.<br /><br /><b>Valid Values:</b>
     * <ul><li><code>STATE_OR_PROVINCE</code></li><li><code>COUNTRY</code></li></ul>
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/bas:RegionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $regionType = null;
}
