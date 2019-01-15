<?php

/**
 * Class for translating numbers into Slovenian
 *
 * @package Numbers_Words
 */

/**
 * Include needed files
 */
require_once "Numbers/Words.php";
 

/**
 * Class for translating numbers into Serbian.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @link     http://pear.php.net/package/Numbers_Words
 */
class Numbers_Words_Locale_sl extends Numbers_Words
{
    /**
     * Locale name
     * @public string
     * @access public
     */
    public $locale = 'sl';

    /**
     * Language name in English
     * @var string
     * @access public
     */
    public $lang = 'Slovenian';

    /**
     * Native language name
     * @var string
     * @access public
     */
    public $lang_native = 'Slovenian';

    /**
     * The word for the minus sign
     * @var string
     * @access private
     */
    public $_minus = 'минус'; // minus sign

    /**
     * The suffixes for exponents (singular)
     * Names partly based on:
     * http://home.earthlink.net/~mrob/pub/math/largenum.html
     * http://mathforum.org/dr.math/faq/faq.large.numbers.html
     * http://www.mazes.com/AmericanNumberingSystem.html
     * @var array
     * @access private
     */
    public $_exponent = array(
        0 => '',
        3 => 'са којим',
        6 => 'мильјон',
        9 => 'милионери',
        12 => 'трилион',
        15 => 'куадриллион',
        18 => 'куинтиллион',
        21 => 'сектиллионс',
        24 => 'септилион',
        27 => 'оцтиллион',
        30 => 'нониллион',
        33 => 'децилија',
        36 => 'ундецилион',
        39 => 'дуодецилион',
        42 => 'тврдецилион',
        45 => 'куаттродециллион',
        48 => 'куинцециллион',
        51 => 'секдециллион',
        54 => 'септодецилион',
        57 => 'октодецилион',
        60 => 'невмедицеллион',
        63 => 'вигинтиллион',
        66 => 'унивигинтиллион',
        69 => 'дуувигинтиллион',
        72 => 'тревигинтиллион',
        75 => 'куаттровиргиниллион',
        78 => 'кинкуигнилион',
        81 => 'сексвигинтиллион',
        84 => 'септенвигинтиллион',
        87 => 'оцтовигинтиллион',
        90 => 'нови вигинтиллион',
        93 => 'тригиентиллион',
        96 => 'унгигинтиллион',
        99 => 'дуотригинтиллион',
        102 => 'терригинтилион',
        105 => 'кватерарни гликинијум',
        108 => 'куинтригинтиллион',
        111 => 'секеринггинтиллион',
        114 => 'септинтригинтиллион',
        117 => 'оцтогримиллион',
        120 => 'новемтригинтиллион',
        123 => 'квадратилација',
        126 => 'унквадрагинтиллион',
        129 => 'доуквадрагинтиллион',
        132 => 'треквадагинтиллион',
        135 => 'куатернари куадрилинеиллон',
        138 => 'куинкуадрагинтиллион',
        141 => 'секваграгониллион',
        144 => 'септенкуадрагинтиллион',
        147 => 'оцтоаваграгониллион',
        150 => 'новемвквадагинтиллион',
        153 => 'куинкуантиллион',
        156 => 'ункинкигинтиллион',
        159 => 'дооквинкагинтиллион',
        162 => 'трацккуин гуннингиллион',
        165 => 'куатернаригинтиллион',
        168 => 'куинкуингинтиллион',
        171 => 'секвинцигинтиллион',
        174 => 'септенкуингинтиллион',
        177 => 'оцтобинкагинтиллион',
        180 => 'новиквинкагинтиллион',
        183 => 'сексагінтілліон',
        186 => 'секигинтиллион',
        189 => 'дуосекагантиллион',
        192 => 'тресекагинтиллион',
        195 => 'куатерносекагинтиллион',
        198 => 'куинцекагинтиллион',
        201 => 'секекагинтиллион',
        204 => 'септонесекагантиллион',
        207 => 'октосексагантилион',
        210 => 'невесткагантиллион',
        213 => 'септагинтиллион',
        216 => 'унсептагинтиллион',
        219 => 'дуоцептагинтиллион',
        222 => 'треспетагантиллион',
        225 => 'куатерапеатагинтиллион',
        228 => 'куинцестагинтиллион',
        231 => 'секпатхагинтиллион',
        234 => 'септенсептагинтиллион',
        237 => 'оцтоептагинтиллион',
        240 => 'новемсептагинтиллион',
        243 => 'оцтогинтилион',
        246 => 'уницоде гингитиллион',
        249 => 'дуооктогинтиллион',
        252 => 'трекотогантиллион',
        255 => 'куатероцтогхтиллион',
        258 => 'куинцтогинтиллион',
        261 => 'сектогинтиллион',
        264 => 'септотогонтхиллион',
        267 => 'октокотогинтилион',
        270 => 'новекомоготсигинтиллион',
        273 => 'нонагантиллион',
        276 => 'уннагинтиллион',
        279 => 'дооонагантиллион',
        282 => 'траининагинтиллион',
        285 => 'куатерногантициллион',
        288 => 'куиннагантиллион',
        291 => 'снохнагантиллион',
        294 => 'септенногантиллион',
        297 => 'оцтонагантиллион',
        300 => 'новемоннагинтиллион',
        303 => 'центинилион',
    );

    /**
     * The array containing the teens' :) names
     * @var array
     * @access private
     */
    public $_teens = array(
        11 => 'једанаест',
        12 => 'дванаест',
        13 => 'тринаест',
        14 => 'четрнаест',
        15 => 'петнаест',
        16 => 'шеснаест',
        17 => 'седамнаест',
        18 => 'осамнаест',
        19 => 'деветнаест',
    );
    var $_and = 'and';
    /**
     * The array containing the tens' names
     * @var array
     * @access private
     */
    public $_tens = array(
        2 => 'двадесет',
        3 => 'тридесет',
        4 => 'четрдесет',
        5 => 'педесет',
        6 => 'шездесет',
        7 => 'седамдесет',
        8 => 'осамдесет',
        9 => 'деведесет',
    );
    /**
     * @todo
     * Some miscellaneous words and language constructs.
     * @var string
     * @access private
     */
    var $_misc_strings = array(
        'deset'=>'двадесет',           // "ten"
        'edinadeset'=>'единадесет', // "eleven"
        'na'=>'на',                 // liaison particle for 12 to 19
        'sto'=>'сто',               // "hundred"
        'sta'=>'ста',               // suffix for 2 and 3 hundred
        'stotin'=>'стотин',         // suffix for 4 to 9 hundred
        'hiliadi'=>'хиляди'         // plural form of "thousand"
    );

    /**
     * The array containing the hundreds' names
     * @var array
     * @access private
     */
    public $_hundreds = array(
        1 => 'сто',
        2 => 'две стотине',
        3 => 'три стотине',
        4 => 'четири стотине',
        5 => 'пет стотина',
        6 => 'шестсто',
        7 => 'седам стотина',
        8 => 'осам стотина',
        9 => 'девет стотина'
    );

    /**
     * The array containing the digits
     * for neutral, male and female
     * @var array
     * @access private
     */
    public $_digits = array(
        array('нула', 'један', 'два', 'три', 'четири', 'пет', 'шест', 'седам', 'осам', 'девет'),
        array('нула', 'један', 'два', 'три', 'четири', 'пет', 'шест', 'седам', 'осам', 'девет'),
        array('нула', 'један', 'два', 'три', 'четири', 'пет', 'шест', 'седам', 'осам', 'девет'),
    );

    /**
     * The word separator
     * @var string
     * @access private
     */
    public $_sep = ' ';

    /**
     * The currency names (based on the below links,
     * informations from central bank websites and on encyclopedias)
     *
     * @var array
     * @access private
     */
    public $_currency_names = array(
        'ALL' => array(
            array(1, 'лек', 'леки', 'леках'),
            array(2, 'схисха', 'схисха', 'раттлес'),
        ),
        'AUD' => array(
            array(1, 'аустралијски долар', 'аустралијски долар', 'аустралијски долари'),
            array(1, 'цент', 'центи', 'центи'),
        ),
        'BGN' => array(
            array(1, 'лава', 'лава', 'лава'),
            array(2, 'кост', 'кости', 'стотицс'),
        ),
        'BRL' => array(
            array(1, 'бразилиан реал', 'бразилске реалности', 'бразилиан реалс'),
            array(1, 'центауро', 'центауро', 'центауро'),
        ),
        'BYR' => array(
            array(1, 'белоруски рубља', 'белоруски рубљи', 'белоруски рубљи'),
            array(2, 'пени', 'пени', 'центи'),
        ),
        'CAD' => array(
            array(1, 'канадски долар', 'канадски долари', 'канадски долари'),
            array(1, 'цент', 'центи', 'центи'),
        ),
        'CHF' => array(
            array(1, 'швајцарски франак', 'швајцарски франци', 'швајцарски франци'),
            array(1, 'центиме', 'центимес', 'центимес'),
        ),
        'CYP' => array(
            array(1, 'кипарска фунта', 'кипарских фунти', 'кипарске киле'),
            array(1, 'цент', 'центи', 'центи'),
        ),
        'CZK' => array(
            array(2, 'чешка круна', 'чешке круне', 'чешке круне'),
            array(1, 'корни', 'корни', 'корни'),
        ),
        'DKK' => array(
            array(2, 'Дациан цровн', 'данске круне', 'данске круне'),
            array(1, 'ере', 'ере', 'ере'),
        ),
        'EEK' => array(
            array(2, 'естонска круна', 'естонске круне', 'естонске круне'),
            array(1, 'стентови', 'стентови', 'стентови'),
        ),
        'EUR' => array(
            array(1, 'евро', 'евро', 'евро'),
            array(1, 'еуроцент', 'еуроцентс', 'еуроцентс'),
        ),
        'GBP' => array(
            array(1, 'фунт стерлинга', 'фунти стерлинга', 'фунти стерлинга'),
            array(1, 'пенце', 'пенце', 'пенце'),
        ),
        'HKD' => array(
            array(1, 'хонг конг доллар', 'Хонконга долара', 'хонгконг долари'),
            array(1, 'цент', 'центи', 'центи'),
        ),
        'HRK' => array(
            array(2, 'цроатиан кун', 'цроатиан цоонеи', 'цроатиан кун'),
            array(2, 'усне', 'усне', 'усне'),
        ),
        'HUF' => array(
            array(1, 'мађарски форинт',  'мађарски форинт', 'мађарски форинтс'),
            array(1, 'пунила', 'филиљ', 'пунила'),
        ),
        'ISK' => array(
            array(2, 'исландска круна', 'исландске круне', 'исландске круне'),
            array(1, 'ера', 'ера', 'ера'),
        ),
        'JPY' => array(
            array(2, 'јен', 'јен', 'јен'),
            array(2, 'сеп', 'сеп', 'сеп'),
        ),
        'LTL' => array(
            array(1, 'лит', 'лити', 'литів'),
            array(1, 'цент', 'центи', 'центів'),
        ),
        'LVL' => array(
            array(1, 'лат', 'лати', 'латів'),
            array(1, 'сентим', 'сентими', 'сентимів'),
        ),
        'MKD' => array(
            array(1, 'македонски динар', 'македонски динари', 'Македонски динар'),
            array(1, 'дени', 'дени', 'дени'),
        ),
        'MTL' => array(
            array(2, 'малтешка лира', 'малтешка лира', 'малтешка лира'),
            array(1, 'сентим', 'сентими', 'сентимів'),
        ),
        'NOK' => array(
            array(2, 'норвешка круна', 'норвешке круне', 'Норвешке круне'),
            array(0, 'ере', 'ере', 'ере'),
        ),
        'PLN' => array(
            array(1, 'злоти', 'злоти', 'злоти'),
            array(1, 'новац', 'новац', 'новац'),
        ),
        'ROL' => array(
            array(1, 'румунске леи', 'румунські леї', 'румунських леїв'),
            array(1, 'бани', 'бани', 'бани'),
        ),
        // both RUR and RUR are used, Some users use RUB for shorter form
        'RUB' => array(
            array(1, 'рубља', 'рублес', 'рублес'),
            array(2, 'пени', 'пени', 'центи'),
        ),
        'RUR' => array(
            array(1, 'руска рубља', 'руски рубљи', 'руски рублес'),
          array(2, 'пени', 'пени', 'центи'),
        ),
        'SEK' => array(
            array(2, 'шведска круна', 'шведске круне', 'шведске круне'),
            array(1, 'ере', 'ере', 'ере'),
        ),
        'SIT' => array(
            array(1, 'словеначки толар', 'словеначки толар', 'словеначки толар'),
            array(2, 'стотина', 'стотина', 'стотин'),
        ),
        'SKK' => array(
            array(2, 'словак цровн', 'словачке круне', 'словачка круна'),
            array(0, '', '', ''),
        ),
        'TRL' => array(
            array(2, 'турска лира', 'туркисх Лира', 'турска лира'),
            array(1, 'курусх', 'курусхи', 'курусхив'),
        ),
        'UAH' => array(
            array(2, 'хривња', 'хривња', 'хривња'),
            array(1, 'центи', 'центи', 'центи'),
        ),
        'USD' => array(
            array(1, 'амерички долар', 'US долара', 'US долара'),
              array(1, 'центи', 'центи', 'центи'),
        ),
        'YUM' => array(
            array(1, 'Југословенски динар', 'Југославенски динар', 'Југославенски динар'),
            array(1, 'пара', 'пара', 'пара'),
        ),
        'ZAR' => array(
            array(1, 'ранд', 'ранди', 'ранди'),
            array(1, 'цент', 'центи', 'центи'),
        ),
        'MGA' => array(
            array(1, 'Ariary', 'Ariary', 'Ariary'),
            array(1, '', '', ''),
        ),
          'MUR' => array(
            array(1, 'Mauritska rupija', 'Mauritska rupija', 'Mauritska rupija'),
            array(1,  'cent', 'cent', 'cent'),
        )

    );

    /**
     * The default currency name
     * @var string
     * @access public
     */
    public $def_currency = 'RSD';  // Serbian money


    // {{{ _toWords()
    /**
     * Converts a group of 3 digits to its word representation
     * in Russian language.
     *
     * @param integer $num    An integer between -infinity and infinity inclusive :)
     *                        that need to be converted to words
     * @param integer $gender Gender of string, 0=neutral, 1=male, 2=female.
     * @param integer &$case  A variable passed by reference which is set to case
     *                        of the word associated with the number
     *
     * @return string  The corresponding word representation
     *
     * @access private
     * @author Andrey Demenev <demenev@on-line.jar.ru>
     */
    function _groupToWords($num, $gender, &$case)
    {
        $ret  = '';
        $case = 3;

        if ((int)$num == 0) {
            $ret = '';
        } elseif ($num < 10) {
            $ret = $this->_digits[$gender][(int)$num];
            if ($num == 1) {
                $case = 1;
            } elseif ($num < 5) {
                $case = 2;
            } else {
                $case = 3;
            }

        } else {
            $num = str_pad($num, 3, '0', STR_PAD_LEFT);

            $hundreds = (int)$num{0};
            if ($hundreds) {
                $ret = $this->_hundreds[$hundreds];
                if (substr($num, 1) != '00') {
                    $ret .= $this->_sep;
                }

                $case = 3;
            }

            $tens = (int)$num{1};
            $ones = (int)$num{2};
            if ($tens || $ones) {
                if ($tens == 1 && $ones == 0) {
                    $ret .= 'deset';
                } elseif ($tens == 1) {
                    $ret .= $this->_teens[$ones+10];
                } else {
                    if ($tens > 0) {
                        $ret .= $this->_tens[(int)$tens];
                    }

                    if ($ones > 0) {
                        $ret .= $this->_sep
                            . $this->_digits[$gender][$ones];

                        if ($ones == 1) {
                            $case = 1;
                        } elseif ($ones < 5) {
                            $case = 2;
                        } else {
                            $case = 3;
                        }
                    }
                }
            }
        }

        return $ret;
    }
    // }}}
    /**
     * Converts a number to its word representation
     * in Russian language and determines the case of string.
     *
     * @param integer $num    An integer between -infinity and infinity inclusive :)
     *                        that need to be converted to words
     * @param integer &$case  A variable passed by reference which is set to case
     *                        of the word associated with the number
     * @param integer $gender Gender of string, 0=neutral, 1=male, 2=female.
     *                        Optional, defaults to 1.
     *
     * @return string  The corresponding word representation
     *
     * @access private
     */
    public function _toWordsWithCase($num, &$case, $gender = 1)
    {
        $ret  = '';
        $case = 3;

        $num = trim($num);

        $sign = "";
        if (substr($num, 0, 1) == '-') {
            $sign = $this->_minus . $this->_sep;
            $num = substr($num, 1);
        }

        while (strlen($num) % 3) {
            $num = '0' . $num;
        }

        if ($num == 0 || $num == '') {
            $ret .= $this->_digits[$gender][0];
        } else {
            $power = 0;

            while ($power < strlen($num)) {
                if (!$power) {
                    $groupgender = $gender;
                } elseif ($power == 3) {
                    $groupgender = 2;
                } else {
                    $groupgender = 1;
                }

                $group = $this->_groupToWords(substr($num, -$power - 3, 3), $groupgender, $_case);
                if (!$power) {
                    $case = $_case;
                }

                if ($power == 3) {
                    if ($_case == 1) {
                        $group .= $this->_sep . 'хиљаду';
                    } elseif ($_case == 2) {
                        $group .= $this->_sep . 'хиљаде';
                    } else {
                        $group .= $this->_sep . 'хиљаде';
                    }
                } elseif ($group && $power > 3 && isset($this->_exponent[$power])) {
                    $group .= $this->_sep . $this->_exponent[$power];
                    if ($_case == 2) {
                        $group .= 'и';
                    } elseif ($_case == 3) {
                        $group .= 'ів';
                    }
                }

                if ($group) {
                    $ret = $group . $this->_sep . $ret;
                }

                $power += 3;
            }
        }

        return $sign . $ret;
    }

    // }}}
    // {{{ _groupToWords()
// {{{ _showDigitsGroup()

    /**
     * Converts a three-digit number to its word representation
     * in Bulgarian language.
     *
     * @param integer $num    An integer between 1 and 999 inclusive.
     * @param integer $gender An integer which represents the gender of
     *                                                     the current digits group.
     *                                                     0 - neuter
     *                                                     1 - masculine
     *                                                    -1 - feminine
     * @param boolean $last   A flag that determines if the current digits group
     *                        is the last one.
     *
     * @return string   The words for the given number.
     *
     * @access private
     * @author Kouber Saparev <kouber@php.net>
     */
    function _showDigitsGroup($num, $gender = 0, $last = false)
    {
        /* A storage array for the return string.
             Positions 1, 3, 5 are intended for digit words
             and everything else (0, 2, 4) for "and" words.
             Both of the above types are optional, so the size of
             the array may vary.
        */
        $ret = array();

        // extract the value of each digit from the three-digit number
        $e = $num%10;                  // ones
        $d = ($num-$e)%100/10;         // tens
        $s = ($num-$d*10-$e)%1000/100; // hundreds

        // process the "hundreds" digit.
        if ($s) {
            switch ($s) {
                case 1:
                    $ret[1] = $this->_misc_strings['sto'];
                    break;
                case 2:
                case 3:
                    $ret[1] = $this->_digits[0][$s].$this->_misc_strings['sta'];
                    break;
                default:
                    $ret[1] = $this->_digits[0][$s].$this->_misc_strings['stotin'];
            }
        }

        // process the "tens" digit, and optionally the "ones" digit.
        if ($d) {
            // in the case of 1, the "ones" digit also must be processed
            if ($d==1) {
                if (!$e) {
                    $ret[3] = $this->_misc_strings['deset']; // ten
                } else {
                    if ($e==1) {
                        $ret[3] = $this->_misc_strings['edinadeset']; // eleven
                    } else {
                        $ret[3] = $this->_digits[1][$e].$this->_misc_strings['na'].$this->_misc_strings['deset']; // twelve - nineteen
                    }
                    // the "ones" digit is alredy processed, so skip a second processment
                    $e = 0;
                }
            } else {
                $ret[3] = $this->_digits[1][$d].$this->_misc_strings['deset']; // twenty - ninety
            }
        }

        // process the "ones" digit
        if ($e) {
            $ret[5] = $this->_digits[$gender][$e];
        }

        // put "and" where needed
        if (count($ret)>1) {
            if ($e) {
                $ret[4] = $this->_and;
            } else {
                $ret[2] = $this->_and;
            }
        }

        // put "and" optionally in the case this is the last non-empty group
        if ($last) {
            if (!$s||count($ret)==1) {
                $ret[0] = $this->_and;
            }
            $this->_last_and = true;
        }

        // sort the return array so that "and" constructs go to theirs appropriate places
        ksort($ret);

        return implode($this->_sep, $ret);
    }




    // }}}

    // {{{ _splitNumber()

    /**
     * Split a number to groups of three-digit numbers.
     *
     * @param mixed $num An integer or its string representation
     *                   that need to be split
     *
     * @return array  Groups of three-digit numbers.
     * @access private
     * @author Kouber Saparev <kouber@php.net>
     * @since  PHP 4.2.3
     */
    function _splitNumber($num)
    {
        if (is_string($num)) {
            $ret    = array();
            $strlen = strlen($num);
            $first  = substr($num, 0, $strlen%3);

            preg_match_all('/\d{3}/', substr($num, $strlen%3, $strlen), $m);
            $ret =& $m[0];

            if ($first) {
                array_unshift($ret, $first);
            }

            return $ret;
        }
        return explode(' ', number_format($num, 0, '', ' ')); // a faster version for integers
    }
    // }}}

    // {{{ _toWords()

    /**
     * Converts a number to its word representation
     * in French language.
     *
     * @param integer $num An integer (or its string representation) between 9.99*-10^302
     *                        and 9.99*10^302 (999 centillions) that need to be converted to words
     *
     * @return string  The corresponding word representation
     * @access protected
     * @author Kouber Saparev <kouber@php.net>
     * @since  Numbers_Words 0.16.3
     */
    function _toWords($num = 0)
    {
        $ret = '';

        // check if $num is a valid non-zero number
        if (!$num || preg_match('/^-?0+$/', $num) || !preg_match('/^-?\d+$/', $num)) {
            return $this->_zero;
        }

        // add a minus sign
        if (substr($num, 0, 1) == '-') {
            $ret = $this->_minus . $this->_sep;
            $num = substr($num, 1);
        }

        // if the absolute value is greater than 9.99*10^302, return infinity
        if (strlen($num)>306) {
            return $ret . $this->_infinity;
        }

        // strip excessive zero signs
        $num = ltrim($num, '0');

        // split $num to groups of three-digit numbers
        $num_groups = $this->_splitNumber($num);

        $sizeof_numgroups = count($num_groups);

        foreach ($num_groups as $i=>$number) {
            // what is the corresponding exponent for the current group
            $pow = $sizeof_numgroups-$i;

            // skip processment for empty groups
            if ($number!='000') {
                if ($number!=1 || $pow!=2) {
                    $ret .= $this->_showDigitsGroup($number, $i+1==$sizeof_numgroups||$pow>2).$this->_sep;
                }
                $ret .= $this->_exponent[($pow-1)*3];
                if ($pow>2 && $number>1) {
                    $ret .= $this->_plural;
                }
                $ret .= $this->_sep;
            }
        }

        return rtrim($ret, $this->_sep);
    }
    // }}}
    // {{{ toCurrencyWords()
    /**
     * Converts a currency value to its word representation
     * (with monetary units) in English language
     *
     * @param integer       $int_curr   An international currency symbol as defined by the ISO 4217 standard (three characters)
     * @param integer       $decimal A money total amount without fraction part (e.g. amount of dollars)
     * @param integer|bool  $fraction   Fractional part of the money amount (e.g. amount of cents)
     *                                  Optional. Defaults to false.
     * @param integer|bool  $convert_fraction   Convert fraction to words (left as numeric if set to false).
     *                                          Optional. Defaults to true.
     * @return string  The corresponding word representation for the currency
     *
     * @access public
     * @author Piotr Klaban <makler@man.torun.pl>
     * @since  Numbers_Words 0.13.1
     */
    public function toCurrencyWords($int_curr, $decimal, $fraction = false, $convert_fraction = true)
    {
        $int_curr = strtoupper($int_curr);
        if (!isset($this->_currency_names[$int_curr])) {
            $int_curr = $this->def_currency;
        }
        $curr_names = $this->_currency_names[$int_curr];

        $ret = trim($this->_toWords($decimal));
        $lev = ($decimal == 1) ? 0 : 1;
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
                    $ret .= $this->_sep . $curr_names[1][0] . 's';
                }
            } else {
                $ret .= $this->_sep . $curr_names[1][0];
            }
        }
        return $ret;
    }
    // }}}
}
