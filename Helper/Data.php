<?php

namespace Vnecoms\PdfProItem\Helper;

use Magento\Framework\App\Helper\Context as Context;

/**
 * Class Data.
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Data constructor.
     *
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }
}
