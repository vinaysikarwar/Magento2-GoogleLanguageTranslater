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

namespace WebTechnologyCodes\GoogleLanguageTranslater\Model\Source;

class Layout implements \Magento\Framework\Option\ArrayInterface
{

    protected $_options;

    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray() {

        $this->_options = [
            ['label' => 'Simple Layout', 'value' => 'SIMPLE'],
            ['label' => 'Verticle Layout', 'value' => 'VERTICLE'],
            ['label' => 'Horizontal Layout', 'value' => 'HORIZONTAL'],
        ];
        return $this->_options;
    }

}