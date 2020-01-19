<?php
/**
 * Web Technology Codes
 * Web Technology Codes Google Language Translator Extension
 * 
 * @category   WebTechnologyCodes
 * @package    WebTechnlogyCodes_GoogleLanguageTranslater
 * @copyright  Copyright © 2018 Web Technology Codes (https://www.webtechnologycodes.com)
 * @license    https://www.webtechnologycodes.com/magento-extension-license/
 */

namespace WebTechnologyCodes\GoogleLanguageTranslater\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{

    /**
     * Initialize
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Get System configuration option values
     */
    public function getConfigValue($value = '') {
        return $this->_scopeConfig
                ->getValue(
                        $value, 
                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE
                        );
    }

}