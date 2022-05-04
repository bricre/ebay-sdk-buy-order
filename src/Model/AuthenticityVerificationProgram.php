<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that provides the status and outcome of an order line item going through
 * the Authenticity Guarantee verification process.
 */
class AuthenticityVerificationProgram extends AbstractModel
{
    /**
     * An informational message that applies to the Authenticity Guarantee program.
     *
     * @var string
     */
    public $description = null;

    /**
     * An informational message regarding the authentication outcome of an Authenticity
     * Guarantee verification inspection.<br /><br /><span
     * class="tablenote"><b>Note:</b> This field is conditionally returned when there
     * is information that applies to the Authenticity Guarantee program.</span>.
     *
     * @var string
     */
    public $outcomeReason = null;

    /**
     * An enumerated value that indicates whether the order line item has passed or
     * failed the Authenticity Guarantee verification inspection, or whether the
     * inspection and/or results are still pending.<br /><br /><span
     * class="tablenote"><b>Note:</b> This field is conditionally returned when the
     * purchase is complete.</span><br /><br /><b>Valid
     * Values:</b><ul><li><code>PENDING</code></li><li><code>PASSED</code></li><li><code>FAILED</code></li><li><code>INELIGIBLE</code></li></ul>
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:AuthenticityVerificationStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The terms and conditions that apply to the Authenticity Guarantee program.
     *
     * @var string
     */
    public $termsWebUrl = null;
}
