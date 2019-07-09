<?php
/**
 * Numbers_Words
 *
 * PHP version 5
 *
 * Copyright (c) 1997-2006 The PHP Group
 *
 * This source file is subject to version 3.01 of the PHP license,
 * that is bundled with this package in the file LICENSE, and is
 * available at through the world-wide-web at
 * http://www.php.net/license/3_01.txt
 * If you did not receive a copy of the PHP license and are unable to
 * obtain it through the world-wide-web, please send a note to
 * license@php.net so we can mail you a copy immediately.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @author   Xavier Noguer
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @version  SVN: $Id$
 * @link     http://pear.php.net/package/Numbers_Words
 */

/**
 * Class for translating numbers into Spanish (Castellano).
 *
 * @author Xavier Noguer
 * @package Numbers_Words
 */

/**
 * Include needed files
 */
require_once "Numbers/Words.php";

/**
 * Class for translating numbers into Spanish (Castellano).
 * It supports up to decallones (10^6).
 * It doesn't support spanish tonic accents (acentos).
 *
 * @category Numbers
 * @package  Numbers_Words
 * @author   Xavier Noguer
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @link     http://pear.php.net/package/Numbers_Words
 */
class Numbers_Words_Locale_es extends Numbers_Words
{
    // {{{ properties

    /**
     * Locale name
     * @var string
     * @access public
     */
    var $locale = 'es';

    /**
     * Language name in English
     * @var string
     * @access public
     */
    var $lang = 'Spanish';

    /**
     * Native language name
     * @var string
     * @access public
     */
    var $lang_native = 'Espa�ol';

    /**
     * The word for the minus sign
     * @var string
     * @access private
     */
    var $_minus = 'menos';

    /**
     * The sufixes for exponents (singular and plural)
     * @var array
     * @access private
     */
    var $_exponent = array(
        0 => array('', ''),
        3 => array('mil', 'mil'),
        6 => array('mill�n', 'millones'),
        12 => array('bill�n', 'billones'),
        18 => array('tril�n', 'trillones'),
        24 => array('cuatrill�n', 'cuatrillones'),
        30 => array('quintill�n', 'quintillones'),
        36 => array('sextill�n', 'sextillones'),
        42 => array('septill�n', 'septillones'),
        48 => array('octall�n', 'octallones'),
        54 => array('nonall�n', 'nonallones'),
        60 => array('decall�n', 'decallones'),
    );
    /**
     * The array containing the digits (indexed by the digits themselves).
     * @var array
     * @access private
     */
    var $_digits = array(
        0 => 'cero', 'uno', 'dos', 'tres', 'cuatro',
        'cinco', 'seis', 'siete', 'ocho', 'nueve'
    );
    /**
     * The word separator
     * @var string
     * @access private
     */
    var $_sep = ' ';

    public $def_currency = 'EUR';
    /**
     * The currency names (based on the below links,
     * informations from central bank websites and on encyclopedias)
     *
     * @var array
     * @link http://en.wikipedia.org/wiki/ISO_4217
     * @access private
     */
    public $_currency_names = array(
        'AFN' => array(array('Əfqanıstan əfqanisi'), array('pul')),
        'ALL' => array(array('Albaniya ləki'), array('gindarka')),
        'AMD' => array(array('Ermənistan dramı'), array('luma')),
        'AOA' => array(array('Anqola yeni kuanzası'), array('lvey')),
        'ARS' => array(array('Argentina pesosu'), array('sentavo')),
        'AUD' => array(array('Avstraliya dolları'), array('sent')),
        'AWG' => array(array('Aruba florini'), array('sent')),
        'AZN' => array(array('Azərbaycan manatı'), array('qəpik')),
        'BAM' => array(array('Bosniya-Herseqovina markası'), array('feniq')),
        'BBD' => array(array('Barbados dolları'), array('sent')),
        'BDT' => array(array('Banqladeş təkəsi'), array('paysa')),
        'BGN' => array(array('Bolqarıstan levi'), array('stotinka')),
        'BHD' => array(array('Bəhreyn dinarı'), array('fils')),
        'BIF' => array(array('Burundi frankı'), array('sentim')),
        'BMD' => array(array('Bermuda dolları'), array('sent')),
        'BND' => array(array('Bruney singiti'), array('sen')),
        'BOB' => array(array('Boliviya bolivianosu'), array('sentavo')),
        'BRL' => array(array('Braziliya realı'), array('sentavos')),
        'BSD' => array(array('Baham dolları'), array('sent')),
        'BTN' => array(array('Butan nqultrumu'), array('çetrum')),
        'BWP' => array(array('Botsvana pulası'), array('feb')),
        'BYR' => array(array('Belarusiya rublu'), array('qəpik')),
        'BZD' => array(array('Beliz dolları'), array('sent')),
        'CAD' => array(array('Kanada dolları'), array('sent')),
        'CDF' => array(array('Konqo frankı'), array('sentim')),
        'CHF' => array(array('İsveçrə frankı'), array('rapp')),
        'CLP' => array(array('Çili pesosu'), array('sentavo')),
        'CNY' => array(array('Çin yuanı'), array('fen')),
        'COP' => array(array('Kolumbiya pesosu'), array('sentavo')),
        'CRC' => array(array('Kosta-Rika kolonu'), array('sentimos')),
        'CUP' => array(array('Kuba pesosu'), array('sentavo')),
        'CVE' => array(array('Keyp-Verde eskudosu'), array('sentavo')),
        'CYP' => array(array('Kipr funtu'), array('sent')),
        'CZK' => array(array('Çex korunası'), array('haler')),
        'DJF' => array(array('Cibuti frankı'), array('sentim')),
        'DKK' => array(array('Danimarka kronu'), array('ore')),
        'DOP' => array(array('Dominikan pesosu'), array('sentavo')),
        'DZD' => array(array('Əlcəzair dinarı'), array('sentim')),
        'EEK' => array(array('Estoniya kronu'), array('senti')),
        'EGP' => array(array('Misir məsrisi'), array('ərş')),
        'ERN' => array(array('Eritrea nəkfası'), array('sent')),
        'ETB' => array(array('Efiopiya birri'), array('santim')),
        'EUR' => array(array('avro'), array('avro-sent')),
        'FJD' => array(array('Fici dolları'), array('sent')),
        'FKP' => array(array('Folklend adaları funtu'), array('penni')),
        'GBP' => array(array('funt sterlinq'), array('penni')),
        'GEL' => array(array('Gürcüstan larisi'), array('tetri')),
        'GSH' => array(array('Qana sedisi'), array('peseva')),
        'GIP' => array(array('Gibraltar funtu'), array('penni')),
        'GMD' => array(array('Qambiya dalasisi'), array('butut')),
        'GNF' => array(array('Qvineya frankı'), array('sentim')),
        'GTQ' => array(array('Qvatemala kvetzalı'), array('sent')),
        'HKD' => array(array('Honq Konq dolları'), array('sent')),
        'HNL' => array(array('Honduras lempirası'), array('sentavo')),
        'HRK' => array(array('Xorvat kunası'), array('lipa')),
        'HUF' => array(array('Macar forinti'), array('filler')),
        'IDR' => array(array('İndoneziya rupiası'), array('sen')),
        'ILS' => array(array('İsrail yeni şeqeli'), array('aqorot')),
        'INR' => array(array('Hindistan rupisi'), array('paysa')),
        'IQD' => array(array('İraq dinarı'), array('fils')),
        'IRR' => array(array('İran rialı'), array('')),
        'ISK' => array(array('İslandiya kronu'), array('aurar')),
        'JOD' => array(array('İordaniya dinarı'), array('qirş')),
        'JPY' => array(array('Yapon yeni'), array('sen')),
        'KGS' => array(array('Qırğızıstan somu'), array('tyiyn')),
        'KPW' => array(array('Şimali Koreya vonu'), array('çon')),
        'KRW' => array(array('Cənubi Koreya vonu'), array('jeon')),
        'KWD' => array(array('Küveyt dinarı'), array('fils')),
        'KYD' => array(array('Keymən adaları dolları'), array('sent')),
        'KZT' => array(array('Qazaxıstan təngəsi'), array('tiın')),
        'LBP' => array(array('Livan funtu'), array('piastr')),
        'LTL' => array(array('Litva liti'), array('sent')),
        'LVL' => array(array('Latviya latı'), array('sentim')),
        'MDL' => array(array('Moldova leyi'), array('ban')),
        'MKD' => array(array('Makedoniya dinarı'), array('deni')),
        'MTL' => array(array('Malta lirəsi'), array('sentim')),
        'NOK' => array(array('Norveç kronu'), array('ore')),
        'PLN' => array(array('Polşa zlotu'), array('qroş')),
        'ROL' => array(array('Rumıniya leyi'), array('bani')),
        'RUB' => array(array('Rus rublu'), array('qəpik')),
        'SEK' => array(array('İsveç kronu'), array('oere')),
        'SIT' => array(array('Sloveniya Toları'), array('stotinia')),
        'SKK' => array(array('Slovak kronu'), array()),
        'TRL' => array(array('Türk lirəsi'), array('quruş')),
        'UAH' => array(array('Ukrayna hrivnası'), array('sent')),
        'USD' => array(array('Amerikan dolları'), array('sent')),
        'ZAR' => array(array('Cənubi Afrika randı'), array('sent')),
        'MGA' => array(array('Ariary'), array('')),
        'MUR' => array(array('Rupia de Mauricio'), array('sent')),
        'SCR' => array(array('Rupia de Seychelles'), array('sent')),
        'SGD' => array(array('Dolar de Singapur'), array('sent')),
        'LKR' => array(array('Rupia '), array('sent')),
        'IDR' => array(array('Rupia indonesia'), array('')),
        'CDF' => array(array('Franco congoleño'), array('')),
    );


    // }}}
    // {{{ _toWords()
    /**
     * Converts a number to its word representation
     * in Spanish (Castellano).
     *
     * @param integer $num An integer between -infinity and infinity inclusive :)
     *                        that should be converted to a words representation
     * @param integer $power The power of ten for the rest of the number to the right.
     *                        For example toWords(12,3) should give "doce mil".
     *                        Optional, defaults to 0.
     *
     * @return string  The corresponding word representation
     *
     * @access protected
     * @author Xavier Noguer
     * @since  Numbers_Words 0.16.3
     */
    function _toWords($num, $power = 0)
    {
        // The return string;
        $ret = '';

        // add a the word for the minus sign if necessary
        if (substr($num, 0, 1) == '-') {
            $ret = $this->_sep . $this->_minus;
            $num = substr($num, 1);
        }


        // strip excessive zero signs
        $num = preg_replace('/^0+/', '', $num);

        if (strlen($num) > 6) {
            $current_power = 6;
            // check for highest power
            if (isset($this->_exponent[$power])) {
                // convert the number above the first 6 digits
                // with it's corresponding $power.
                $snum = substr($num, 0, -6);
                $snum = preg_replace('/^0+/', '', $snum);
                if ($snum !== '') {
                    $ret .= $this->_toWords($snum, $power + 6);
                }
            }
            $num = substr($num, -6);
            if ($num == 0) {
                return $ret;
            }
        } elseif ($num == 0 || $num == '') {
            return (' ' . $this->_digits[0]);
            $current_power = strlen($num);
        } else {
            $current_power = strlen($num);
        }

        // See if we need "thousands"
        $thousands = floor($num / 1000);
        if ($thousands == 1) {
            $ret .= $this->_sep . 'mil';
        } elseif ($thousands > 1) {
            $ret .= $this->_toWords($thousands, 3);
        }

        // values for digits, tens and hundreds
        $h = floor(($num / 100) % 10);
        $t = floor(($num / 10) % 10);
        $d = floor($num % 10);

        // cientos: doscientos, trescientos, etc...
        switch ($h) {
            case 1:
                if (($d == 0) and ($t == 0)) { // is it's '100' use 'cien'
                    $ret .= $this->_sep . 'cien';
                } else {
                    $ret .= $this->_sep . 'ciento';
                }
                break;
            case 2:
            case 3:
            case 4:
            case 6:
            case 8:
                $ret .= $this->_sep . $this->_digits[$h] . 'cientos';
                break;
            case 5:
                $ret .= $this->_sep . 'quinientos';
                break;
            case 7:
                $ret .= $this->_sep . 'setecientos';
                break;
            case 9:
                $ret .= $this->_sep . 'novecientos';
                break;
        }

        // decenas: veinte, treinta, etc...
        switch ($t) {
            case 9:
                $ret .= $this->_sep . 'noventa';
                break;

            case 8:
                $ret .= $this->_sep . 'ochenta';
                break;

            case 7:
                $ret .= $this->_sep . 'setenta';
                break;

            case 6:
                $ret .= $this->_sep . 'sesenta';
                break;

            case 5:
                $ret .= $this->_sep . 'cincuenta';
                break;

            case 4:
                $ret .= $this->_sep . 'cuarenta';
                break;

            case 3:
                $ret .= $this->_sep . 'treinta';
                break;

            case 2:
                if ($d == 0) {
                    $ret .= $this->_sep . 'veinte';
                } else {
                    if (($power > 0) and ($d == 1)) {
                        $ret .= $this->_sep . 'veinti�n';
                    } else {
                        $ret .= $this->_sep . 'veinti' . $this->_digits[$d];
                    }
                }
                break;

            case 1:
                switch ($d) {
                    case 0:
                        $ret .= $this->_sep . 'diez';
                        break;

                    case 1:
                        $ret .= $this->_sep . 'once';
                        break;

                    case 2:
                        $ret .= $this->_sep . 'doce';
                        break;

                    case 3:
                        $ret .= $this->_sep . 'trece';
                        break;

                    case 4:
                        $ret .= $this->_sep . 'catorce';
                        break;

                    case 5:
                        $ret .= $this->_sep . 'quince';
                        break;

                    case 6:
                    case 7:
                    case 9:
                    case 8:
                        $ret .= $this->_sep . 'dieci' . $this->_digits[$d];
                        break;
                }
                break;
        }

        // add digits only if it is a multiple of 10 and not 1x or 2x
        if (($t != 1) and ($t != 2) and ($d > 0)) {

            // don't add 'y' for numbers below 10
            if ($t != 0) {
                // use 'un' instead of 'uno' when there is a suffix ('mil', 'millones', etc...)
                if (($power > 0) and ($d == 1)) {
                    $ret .= $this->_sep . ' y un';
                } else {
                    $ret .= $this->_sep . 'y ' . $this->_digits[$d];
                }
            } else {
                if (($power > 0) and ($d == 1)) {
                    $ret .= $this->_sep . 'un';
                } else {
                    $ret .= $this->_sep . $this->_digits[$d];
                }
            }
        }

        if ($power > 0) {
            if (isset($this->_exponent[$power])) {
                $lev = $this->_exponent[$power];
            }

            if (!isset($lev) || !is_array($lev)) {
                return null;
            }

            // if it's only one use the singular suffix
            if (($d == 1) and ($t == 0) and ($h == 0)) {
                $suffix = $lev[0];
            } else {
                $suffix = $lev[1];
            }
            if ($num != 0) {
                $ret .= $this->_sep . $suffix;
            }
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
                $ret .= $this->_sep . $curr_names[0][0] . 's';
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
                        $ret .= $this->_sep . $curr_names[1][0] . 's';
                    }
                }
            } else {
                $ret .= $this->_sep . $curr_names[1][0];
            }
        }
        return $ret;
    }
}
