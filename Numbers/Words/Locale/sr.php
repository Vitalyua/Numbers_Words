<?php

/**
 * Class for translating numbers into Serbian
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
class Numbers_Words_Locale_sr  extends Numbers_Words
{
    /**
     * Locale name
     * @public string
     * @access public
     */
    public $locale = 'sr';

    /**
     * Language name in English
     * @var string
     * @access public
     */
    public $lang = 'Serbian';

    /**
     * Native language name
     * @var string
     * @access public
     */
    public $lang_native = 'Serbian';

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
}
