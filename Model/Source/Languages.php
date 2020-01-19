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

class Languages implements \Magento\Framework\Option\ArrayInterface
{

    protected $_options;

    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray() {

        $this->_options = [
            ['label' => 'Afrikaans', 'value' => 'af'],
            ['label' => 'Albanian', 'value' => 'sq'],
            ['label' => 'Arabic', 'value' => 'ar'],
            ['label' => 'Amharic', 'value' => 'am'],
            ['label' => 'Armenian', 'value' => 'hy'],
            ['label' => 'Azerbaijani', 'value' => 'az'],
            ['label' => 'Basque', 'value' => 'eu'],
            ['label' => 'Belarusian', 'value' => 'be'],
            ['label' => 'Bengali', 'value' => 'bn'],
            ['label' => 'Bosnian', 'value' => 'bs'],
            ['label' => 'Bulgarian', 'value' => 'bg'],
            ['label' => 'Catalan', 'value' => 'ca'],
            ['label' => 'Cebuano', 'value' => 'ceb'],
            ['label' => 'Chichewa', 'value' => 'ny'],
            ['label' => 'Chinese', 'value' => 'zh-CN'],
            ['label' => 'Chinese (Simplified)', 'value' => 'zh-CN'],
            ['label' => 'Chinese (Traditional)', 'value' => 'zh-TW'],
            ['label' => 'Croatian', 'value' => 'hr'],
            ['label' => 'Czech', 'value' => 'cs'],
            ['label' => 'Danish', 'value' => 'da'],
            ['label' => 'Dutch', 'value' => 'nl'],
            ['label' => 'English', 'value' => 'en'],
            ['label' => 'Esperanto', 'value' => 'eo'],
            ['label' => 'Estonian', 'value' => 'et'],
            ['label' => 'Filipino', 'value' => 'tl'],
            ['label' => 'Faroese', 'value' => 'fo'],
            ['label' => 'Finnish', 'value' => 'fi'],
            ['label' => 'French', 'value' => 'fr'],
            ['label' => 'Galician', 'value' => 'gl'],
            ['label' => 'Georgian', 'value' => 'ka'],
            ['label' => 'German', 'value' => 'de'],
            ['label' => 'Greek', 'value' => 'el'],
            ['label' => 'Gujarati', 'value' => 'gu'],
            ['label' => 'Haitian', 'value' => 'ht'],
            ['label' => 'Hausa', 'value' => 'ha'],
            ['label' => 'Hebrew', 'value' => 'iw'],
            ['label' => 'Hindi', 'value' => 'hi'],
            ['label' => 'Hmong', 'value' => 'hmn'],
            ['label' => 'Hungarian', 'value' => 'hu'],
            ['label' => 'Icelandic', 'value' => 'is'],
            ['label' => 'Igbo', 'value' => 'ig'],
            ['label' => 'Indonesian', 'value' => 'id'],
            ['label' => 'Irish', 'value' => 'ga'],
            ['label' => 'Italian', 'value' => 'it'],
            ['label' => 'Japanese', 'value' => 'ja'],
            ['label' => 'Javanese', 'value' => 'jv'],
            ['label' => 'Kannada', 'value' => 'kn'],
            ['label' => 'Khmer', 'value' => 'km'],
            ['label' => 'Korean', 'value' => 'ko'],
            ['label' => 'Kazakh', 'value' => 'kk'],
            ['label' => 'Lao', 'value' => 'lo'],
            ['label' => 'Latin', 'value' => 'la'],
            ['label' => 'Latvian', 'value' => 'lv'],
            ['label' => 'Lithuanian', 'value' => 'lt'],
            ['label' => 'Macedonian', 'value' => 'mk'],
            ['label' => 'Malay', 'value' => 'ms'],
            ['label' => 'Malagasy', 'value' => 'mg'],
            ['label' => 'Maltese', 'value' => 'mt'],
            ['label' => 'Maori', 'value' => 'mi'],
            ['label' => 'Marathi', 'value' => 'mr'],
            ['label' => 'Malayalam', 'value' => 'ml'],
            ['label' => 'Mongolian', 'value' => 'mn'],
            ['label' => 'Norwegian', 'value' => 'no'],
            ['label' => 'Nepali', 'value' => 'ne'],
            ['label' => 'Persian', 'value' => 'fa'],
            ['label' => 'Polish', 'value' => 'pl'],
            ['label' => 'Portuguese', 'value' => 'pt'],
            ['label' => 'Punjabi', 'value' => 'pa'],
            ['label' => 'Romanian', 'value' => 'ro'],
            ['label' => 'Russian', 'value' => 'ru'],
            ['label' => 'Serbian', 'value' => 'sr'],
            ['label' => 'Slovak', 'value' => 'sk'],
            ['label' => 'Slovenian', 'value' => 'sl'],
            ['label' => 'Sesotho', 'value' => 'st'],
            ['label' => 'Somali', 'value' => 'so'],
            ['label' => 'Sinhalese', 'value' => 'si'],
            ['label' => 'Spanish', 'value' => 'es'],
            ['label' => 'Swahili', 'value' => 'sw'],
            ['label' => 'Sundanese', 'value' => 'su'],
            ['label' => 'Swedish', 'value' => 'sv'],
            ['label' => 'Tajik', 'value' => 'tg'],
            ['label' => 'Tamil', 'value' => 'ta'],
            ['label' => 'Telugu', 'value' => 'te'],
            ['label' => 'Thai', 'value' => 'th'],
            ['label' => 'Turkish', 'value' => 'tr'],
            ['label' => 'Ukrainian', 'value' => 'uk'],
            ['label' => 'Urdu', 'value' => 'ur'],
            ['label' => 'Uzbek', 'value' => 'uz'],
            ['label' => 'Vietnamese', 'value' => 'vi'],
            ['label' => 'Welsh', 'value' => 'cy'],
            ['label' => 'Xhosa', 'value' => 'xh'],
            ['label' => 'Yiddish', 'value' => 'yi'],
            ['label' => 'Yoruba', 'value' => 'yo'],
            ['label' => 'Zulu', 'value' => 'zu'],
        ];

        return $this->_options;
    }

}