<?php

/**
 * Class for translating numbers into Slovak
 *
 * @package Numbers_Words
 */

/**
 * Include needed files
 */
require_once "Numbers/Words.php";

/**
 * Class for translating numbers into Slovak.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @link     http://pear.php.net/package/Numbers_Words
 */
class Numbers_Words_Locale_sk extends Numbers_Words
{

    // {{{ properties

    /**
     * Locale name
     * @var string
     * @access public
     */
    var $locale = 'sk';

    /**
     * Language name in English
     * @var string
     * @access public
     */
    var $lang = 'Slovak';

    /**
     * Native language name
     * @var string
     * @access public
     */
    var $lang_native = 'Slovak';

    /**
     * The word for the minus sign
     * @var string
     * @access private
     */
    var $_minus = 'mínus'; // minus sign

    /**
     * The sufixes for exponents (singular and plural)
     * Names partly based on:
     * http://cs.wikipedia.org/wiki/P%C5%99edpony_soustavy_SI
     * the rest was translated from lang.en_GB.php
     * names verified by "Ustav pro jazyk cesky" only up to Septilion
     * (they could verify only the lingual matter - not the mathematical one)
     * @var array
     * @access private
     */
    var $_exponent = array(
        0 => array(''),
        3 => array('tisíc','tisíc','tisíc'),
        6 => array('milion','miliony','miliónov'),
        9 => array('miliarda','miliardy','miliard'),
       12 => array('bilion','biliony','bilionů'),
       15 => array('biliarda','biliardy','biliard'),
       18 => array('trilion','triliony','trilionů'),
       21 => array('triliarda','triliardy','triliard'),

       24 => array('kvadrilion','kvadriliony','kvadrilionů'),
       30 => array('kvintilion','kvintiliony','kvintilionů'),
       36 => array('sextilion','sextiliony','sextilionů'),
       42 => array('septilion','septiliony','septilionů'),

       48 => array('oktilion','oktiliony','oktilionů'),
       54 => array('nonilion','noniliony','nonilionů'),
       60 => array('decilion','deciliony','decilionů'),

       66 => array('undecilion','undeciliony','undecilionů'),
       72 => array('duodecilion','duodeciliony','duodecilionů'),
       78 => array('tredecilion','tredeciliony','tredecilionů'),
       84 => array('kvatrodecilion','kvatrodeciliony','kvatrodecilionů'),
       90 => array('kvindecilion','kvindeciliony','kvindecilionů'),
       96 => array('sexdecilion','sexdeciliony','sexdecilionů'),
      102 => array('septendecilion','septendeciliony','septendecilionů'),
      108 => array('oktodecilion','oktodeciliony','oktodecilionů'),
      114 => array('novemdecilion','novemdeciliony','novemdecilionů'),
      120 => array('vigintilion','vigintiliony','vigintilionů'),
      192 => array('duotrigintilion','duotrigintiliony','duotrigintilionů'),
      600 => array('centilion','centiliony','centilionů')

    );

    /**
     * The array containing the forms of Czech word for "hundred"
     * @var array
     * @access private
     */
    var $_hundreds = array(
        0 => 'sto', 'sto', 'sto', 'sto'
    );

    var $_zero = 'nula';
    /**
     * The array containing the digits (indexed by the digits themselves).
     * @var array
     * @access private
     */
    var $_digits = array(
        0 => 'nula',
            1=>'jeden',
        2=>'dva',
        3=>'tri',
        4=>'štyri',5=> 'päť', 6=>'šest',7=> 'sedem',8=> 'osem',9=> 'deväť',

    );
    var $_digitsReplce=array(
        200=>'dvesto',
        300=>'tristo',
        400=>'štyristo',
        500=>'päťsto',
        600=>'šesťsto',
        700=>'sedemsto',
        800=>'osemsto',
        900=>'deväťsto',
        1000=>'tisíc',
        2000=>'dvetisíc',
        3000=>'tritisíc',
        //3000=>'štyritisíc',
    );
    /**
     * The word separator
     * @var string
     * @access private
     */
    var $_sep = ' ';
    public $def_currency = 'USD';  // Serbian money
    var $_currency_names = array(
        'AED' => array(array('dirham'), array('fil')),
        'AFN' => array(array('afganská'), array('pul')),
        'DIR' => array(array('dirham'), array('fil')),
        'BHD' => array(array('dinár'), array('fil')),
        'SAR' => array(array('riál'), array('Halala')),
        'KWD' => array(array('dinár'), array('fil')),
        'INR' => array(array('rupia'), array('paise')),
        'BDT' => array(array('taka'), array('poisha')),
        'TZS' => array(array('tanzánsky šiling'), array('cent')),
        'ALL' => array(array('lek'), array('qindarka')),
        'AUD' => array(array('austrálsky dolár'), array('cent')),
        'BAM' => array(array('konvertibilná marka'), array('fenig')),
        'BGN' => array(array('lev'), array('stotinka')),
        'BRL' => array(array('reálny'), array('centavos')),
        'BYR' => array(array('bieloruský rubeľ'), array('kopecky')),
        'CAD' => array(array('kanadský dolár'), array('cent')),
        'CHF' => array(array('švajčiarsky frank'), array('Rapp')),
        'CYP' => array(array('cyperská libra'), array('cent')),
        'CZK' => array(array('Česká koruna'), array('halerz')),
        'DKK' => array(array('dánska koruna'), array('ruda')),
        'EEK' => array(array('koruna'), array('senti')),
        'EUR' => array(array('euro'), array('euro-cent')),
        'GBP' => array(array('libra'), array('pence')),
        'HKD' => array(array('Hong Kong dolár'), array('cent')),
        'HRK' => array(array('chorvátska kuna'), array('lipa')),
        'HUF' => array(array('forint'), array('plnivo')),
        'ILS' => array(array('nové sheqels'), array('agora')),
        'ISK' => array(array('islandská koruna'), array('aurar')),
        'JPY' => array(array('yen'), array('senátor')),
        'LTL' => array(array('litas'), array('cent')),
        'LVL' => array(array('lat'), array('sentim')),
        'MKD' => array(array('macedónsky dinár'), array('deni')),
        'MTL' => array(array('Maltská líra'), array('centym')),
        'NOK' => array(array('nórska koruna'), array('oere')),
        'PLN' => array(array('zloty'), array('Grosz')),
        'ROL' => array(array('Rumunský leu'), array('bani')),
        'RUB' => array(array('Ruská federácia rubeľ'), array('kopecky')),
        'SEK' => array(array('švédska koruna'), array('oere')),
        'SIT' => array(array('tolar'), array('stotinia')),
        'SKK' => array(array('slovenská koruna'), array('')),
        'TRL' => array(array('líra'), array('kurus')),
        'UAH' => array(array('hrivna'), array('cent')),
        'USD' => array(array('dolárov'), array('cent')),
        'YUM' => array(array('dinárov'), array('para')),
        'ZAR' => array(array('rand'), array('cent')),
        'MGA' => array(array('ariary'), array('')),
        'MUR' => array(array('Mauritská rupia'), array('cent')),
        'SCR' => array(array('Seychel rupia'), array('cent')),
        'RSD' => array(array('Srbský dinár'), array('cent')),
        'SGD' => array(array('Singapurský dolár'), array('cent')),
        'LKR' => array(array('Srílanská rupia'), array('cent')),
        'IDR' => array(array('Indonézština rupia'), array('')),
        'CDF' => array(array('Konžský frank'), array('')),
        'KES' => array(array('Shilling kenyan'), array('cent')),
        'XOF' => array(array('Francs CFA'), array('cent')),
        'NZD' => array(array('New Zealand dollar'), array('cent')),
        'CNY' => array(array('Chinese yuan'), array('cent')),
    );
    // }}}
    // {{{ _toWords()

    /**
     * Converts a number to its word representation
     * in Czech language
     *
     * @param integer $num An integer between -infinity and infinity inclusive :)
     *                           that need to be converted to words
     * @param integer $power The power of ten for the rest of the number to the right.
     *                           Optional, defaults to 0.
     * @param integer $powsuffix The power name to be added to the end of the return string.
     *                            Used internally. Optional, defaults to ''.
     *
     * @return string  The corresponding word representation
     *
     * @access protected
     * @author Petr 'PePa' Pavel <petr.pavel@pepa.info>
     * @since  Numbers_Words 0.16.3
     */
    function _toWords($num, $power = 0, $powsuffix = '')
    {
        $ret = '';

        // add a minus sign
        if (substr($num, 0, 1) == '-') {
            $ret = $this->_sep . $this->_minus;
            $num = substr($num, 1);
        }

        // strip excessive zero signs and spaces
        $num = trim($num);
        if (isset($this->_digitsReplce[$num])){
            return   $this->_digitsReplce[$num];
        }
        $num = preg_replace('/^0+/', '', $num);

        if (strlen($num) > 3) {
            $maxp = strlen($num)-1;
            $curp = $maxp;
            for ($p = $maxp; $p > 0; --$p) { // power

                // check for highest power
                if (isset($this->_exponent[$p])) {
                    // send substr from $curp to $p
                    $snum = substr($num, $maxp - $curp, $curp - $p + 1);
                    $snum = preg_replace('/^0+/', '', $snum);
                    if ($snum !== '') {
                        $cursuffix =' '. $this->_exponent[$power][count($this->_exponent[$power])-1];
                        if ($powsuffix != '') {
                            $cursuffix .=  $powsuffix;
                        }

                        $ret .= $this->_toWords($snum, $p, $cursuffix);
                    }
                    $curp = $p - 1;
                    continue;
                }
            }
            $num = substr($num, $maxp - $curp, $curp - $p + 1);
            if ($num == 0) {
                return $ret;
            }
        } elseif ($num == 0 || $num == '') {
            return  $this->_digits[0];
        }

        $h = $t = $d = 0;

        switch (strlen($num)) {
            case 3:
                $h = (int)substr($num, -3, 1);

            case 2:
                $t = (int)substr($num, -2, 1);

            case 1:
                $d = (int)substr($num, -1, 1);

                break;

            case 0:
                return;
                break;
        }


        if ($h) {

            // inflection of the word "hundred"
            if ($h == 1) {
                $ret .= "jedno" . $this->_hundreds[0] . ' ';
            } elseif ($h == 2) {
                $ret .= "dvě" . $this->_hundreds[1] . ' ';
            } elseif (($h > 1) && ($h < 5)) {
                $ret .= $this->_digits[$h] . $this->_hundreds[2] . ' ';
            } else {        //if ($h >= 5)
                $ret .= $this->_digits[$h] . $this->_hundreds[3] . ' ';
            }
            // in English only - add ' and' for [1-9]01..[1-9]99
            // (also for 1001..1099, 10001..10099 but it is harder)
            // for now it is switched off, maybe some language purists
            // can force me to enable it, or to remove it completely
            // if (($t + $d) > 0)
            //   $ret .= $this->_sep . 'and';
        }

        // ten, twenty etc.
        switch ($t) {

            case 2:
                $ret .= 'dvadsať';
                break;
            case 3:
                $ret .= 'tridsať';
                break;
            case 4:
                $ret .= 'štyridsať';
                break;

            case 5:
                $ret .= 'päťdesiat';
                break;

            case 6:
                $ret .= 'šesťdesiat';
                break;

            case 7:
                $ret .= 'sedemdesiat';
                break;

            case 8:
                $ret .= 'osemdesiat';
                break;

            case 9:
                $ret .= 'deväťdesiat';
                break;

            case 1:
                switch ($d) {
                    case 0:
                        $ret .= 'desať';
                        break;

                    case 1:
                        $ret .= 'jedenásť';
                        break;

                    case 3:
                        $ret .= 'trinásť';
                        break;
                    case 4:
                        $ret .= 'štrnásť';
                        break;

                    case 5:
                        $ret .= 'pätnásť';
                        break;

                    case 9:
                        $ret .= 'devätnásť';
                        break;

                    case 2:

                    case 6:
                    case 7:
                    case 8:
                        $ret .= $this->_digits[$d] . 'násť';
                        break;
                }
                break;
        }

        if (($t != 1) && ($d > 0) && (($power == 0) || ($num > 1))) {
            $ret .= $this->_digits[$d];
        }

        if ($power > 0) {
            if (isset($this->_exponent[$power])) {
                $lev = $this->_exponent[$power];
            }

            if (!isset($lev) || !is_array($lev)) {
                return null;
            }
            $plus = '';
            // inflection of exponental words
            if ($num == 1) {
                $idx = 0;
                $plus = 'jedna ';
            } elseif ((($num > 1) && ($num < 5)) || ((intval("$t$d") > 1) && (intval("$t$d") < 5))) {
                $idx = 1;
            } else {
                $idx = 2;
            }

            $ret .= $this->_sep . $plus . $lev[$idx];
        }

        if ($powsuffix != '') {
            $ret .= $this->_sep . $powsuffix;
        }

        return $ret;
    }
    // }}}

    /**
     * Converts a currency value to its word representation
     * (with monetary units) in English language
     *
     * @param integer $int_curr An international currency symbol as defined by the ISO 4217 standard (three characters)
     * @param integer $decimal A money total amount without fraction part (e.g. amount of dollars)
     * @param integer|bool $fraction Fractional part of the money amount (e.g. amount of cents)
     *                                  Optional. Defaults to false.
     * @param integer|bool $convert_fraction Convert fraction to words (left as numeric if set to false).
     *                                          Optional. Defaults to true.
     * @return string  The corresponding word representation for the currency
     *
     * @access public
     * @author Piotr Klaban <makler@man.torun.pl>
     * @since  Numbers_Words 0.13.1
     */
    function toCurrencyWords($int_curr, $decimal, $fraction = false, $convert_fraction = true)
    {

        $int_curr = strtoupper($int_curr);
        if (!isset($this->_currency_names[$int_curr])) {
            $int_curr = $this->def_currency;
        }
        $curr_names = $this->_currency_names[$int_curr];

        $ret = trim($this->_toWords($decimal));
        $lev = ($decimal == 1) ? 0 : 1;
        if (empty($curr_names[1][0])) {
            $lev = 0;
        }
        if ($lev > 0) {
            if (count($curr_names[0]) > 1) {
                $ret .= $this->_sep . $curr_names[0][$lev];
            } else {
                $ret .= $this->_sep . $curr_names[0][0];// . 's'
            }
        } else {
            $ret .= $this->_sep . $curr_names[0][0];
        }

        if ($fraction !== false) {
            if ($convert_fraction) {
                $ret .= $this->_sep . trim($this->_toWords($fraction));
            } else {
                $ret .= $this->_sep . $fraction;
            }
            $lev = ($fraction == 1) ? 0 : 1;
            if ($lev > 0) {
                if (count($curr_names[1]) > 1) {
                    $ret .= $this->_sep . $curr_names[1][$lev];
                } else {
                    if (!empty($curr_names[1][0])) {
                        $ret .= $this->_sep . $curr_names[1][0];//. 's'
                    }

                }
            } else {
                $ret .= $this->_sep . $curr_names[1][0];
            }
        }
        return $ret;
    }
}
