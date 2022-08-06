<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="{{asset('style.css')}}" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Mohammad Razzaghi</title>
</head>
<body>


<div class="container">
    <form>
        <ul class="flex-outer">
            <li>
                <label for="locale">Select Language</label>
                <select name="locale" id="locale">
                    <option value="" selected>select locale please...</option>
                    <option value="af_NA">Afrikaans (Namibia)</option>
                    <option value="af_ZA">Afrikaans (South Africa)</option>
                    <option value="ak_GH">Akan (Ghana)</option>
                    <option value="sq_AL">Albanian (Albania)</option>
                    <option value="am_ET">Amharic (Ethiopia)</option>
                    <option value="ar_DZ">Arabic (Algeria)</option>
                    <option value="ar_BH">Arabic (Bahrain)</option>
                    <option value="ar_EG">Arabic (Egypt)</option>
                    <option value="ar_IQ">Arabic (Iraq)</option>
                    <option value="ar_JO">Arabic (Jordan)</option>
                    <option value="ar_KW">Arabic (Kuwait)</option>
                    <option value="ar_LB">Arabic (Lebanon)</option>
                    <option value="ar_LY">Arabic (Libya)</option>
                    <option value="ar_MA">Arabic (Morocco)</option>
                    <option value="ar_OM">Arabic (Oman)</option>
                    <option value="ar_QA">Arabic (Qatar)</option>
                    <option value="ar_SA">Arabic (Saudi Arabia)</option>
                    <option value="ar_SD">Arabic (Sudan)</option>
                    <option value="ar_SY">Arabic (Syria)</option>
                    <option value="ar_TN">Arabic (Tunisia)</option>
                    <option value="ar_AE">Arabic (United Arab Emirates)</option>
                    <option value="ar_YE">Arabic (Yemen)</option>
                    <option value="hy_AM">Armenian (Armenia)</option>
                    <option value="as_IN">Assamese (India)</option>
                    <option value="asa_TZ">Asu (Tanzania)</option>
                    <option value="az_Cyrl">Azerbaijani (Cyrillic)</option>
                    <option value="az_Cyrl_AZ">Azerbaijani (Cyrillic, Azerbaijan)</option>
                    <option value="az_Latn">Azerbaijani (Latin)</option>
                    <option value="az_Latn_AZ">Azerbaijani (Latin, Azerbaijan)</option>
                    <option value="bm_ML">Bambara (Mali)</option>
                    <option value="eu_ES">Basque (Spain)</option>
                    <option value="be_BY">Belarusian (Belarus)</option>
                    <option value="bem_ZM">Bemba (Zambia)</option>
                    <option value="bem_ZM">(Zambia)</option>
                    <option value="bez_TZ">Bena (Tanzania)</option>
                    <option value="bn_BD">Bengali (Bangladesh)</option>
                    <option value="bn_IN">Bengali (India)</option>
                    <option value="bs_BA">Bosnian (Bosnia and Herzegovina)</option>
                    <option value="bg_BG">Bulgarian (Bulgaria)</option>
                    <option value="my_MM">Burmese (Myanmar [Burma])</option>
                    <option value="yue_Hant_HK">Cantonese (Traditional, Hong Kong SAR China)</option>
                    <option value="ca_ES">Catalan (Spain)</option>
                    <option value="tzm_Latn">Central Morocco Tamazight (Latin)</option>
                    <option value="tzm_Latn_MA">Central Morocco Tamazight (Latin, Morocco)</option>
                    <option value="chr_US">Cherokee (United States)</option>
                    <option value="cgg_UG">Chiga (Uganda)</option>
                    <option value="zh_Hans">Chinese (Simplified Han)</option>
                    <option value="zh_Hans_CN">Chinese (Simplified Han, China)</option>
                    <option value="zh_Hans_HK">Chinese (Simplified Han, Hong Kong SAR China)</option>
                    <option value="zh_Hans_MO">Chinese (Simplified Han, Macau SAR China)</option>
                    <option value="zh_Hans_SG">Chinese (Simplified Han, Singapore)</option>
                    <option value="zh_Hant">Chinese (Traditional Han)</option>
                    <option value="zh_Hant_HK">Chinese (Traditional Han, Hong Kong SAR China)</option>
                    <option value="zh_Hant_MO">Chinese (Traditional Han, Macau SAR China)</option>
                    <option value="zh_Hant_TW">Chinese (Traditional Han, Taiwan)</option>
                    <option value="kw_GB">Cornish (United Kingdom)</option>
                    <option value="hr_HR">Croatian (Croatia)</option>
                    <option value="cs_CZ">Czech (Czech Republic)</option>
                    <option value="da_DK">Danish (Denmark)</option>
                    <option value="nl_BE">Dutch (Belgium)</option>
                    <option value="nl_NL">Dutch (Netherlands)</option>
                    <option value="ebu_KE">Embu (Kenya)</option>
                    <option value="en_AS">English (American Samoa)</option>
                    <option value="en_AU">English (Australia)</option>
                    <option value="en_BE">English (Belgium)</option>
                    <option value="en_BZ">English (Belize)</option>
                    <option value="en_BW">English (Botswana)</option>
                    <option value="en_CA">English (Canada)</option>
                    <option value="en_GU">English (Guam)</option>
                    <option value="en_HK">English (Hong Kong SAR China)</option>
                    <option value="en_IN">English (India)</option>
                    <option value="en_IE">English (Ireland)</option>
                    <option value="en_IL">English (Israel)</option>
                    <option value="en_JM">English (Jamaica)</option>
                    <option value="en_MT">English (Malta)</option>
                    <option value="en_MH">English (Marshall Islands)</option>
                    <option value="en_MU">English (Mauritius)</option>
                    <option value="en_NA">English (Namibia)</option>
                    <option value="en_NZ">English (New Zealand)</option>
                    <option value="en_MP">English (Northern Mariana Islands)</option>
                    <option value="en_PK">English (Pakistan)</option>
                    <option value="en_PH">English (Philippines)</option>
                    <option value="en_SG">English (Singapore)</option>
                    <option value="en_ZA">English (South Africa)</option>
                    <option value="en_TT">English (Trinidad and Tobago)</option>
                    <option value="en_UM">English (U.S. Minor Outlying Islands)</option>
                    <option value="en_VI">English (U.S. Virgin Islands)</option>
                    <option value="en_GB">English (United Kingdom)</option>
                    <option value="en_US">English (United States)</option>
                    <option value="en_ZW">English (Zimbabwe)</option>
                    <option value="et_EE">Estonian (Estonia)</option>
                    <option value="ee_GH">Ewe (Ghana)</option>
                    <option value="ee_TG">Ewe (Togo)</option>
                    <option value="fo_FO">Faroese (Faroe Islands)</option>
                    <option value="fil_PH">Filipino (Philippines)</option>
                    <option value="fi_FI">Finnish (Finland)</option>
                    <option value="fr_BE">French (Belgium)</option>
                    <option value="fr_BJ">French (Benin)</option>
                    <option value="fr_BF">French (Burkina Faso)</option>
                    <option value="fr_BI">French (Burundi)</option>
                    <option value="fr_CM">French (Cameroon)</option>
                    <option value="fr_CA">French (Canada)</option>
                    <option value="fr_CF">French (Central African Republic)</option>
                    <option value="fr_TD">French (Chad)</option>
                    <option value="fr_KM">French (Comoros)</option>
                    <option value="fr_CG">French (Congo - Brazzaville)</option>
                    <option value="fr_CD">French (Congo - Kinshasa)</option>
                    <option value="fr_CI">French (Côte d’Ivoire)</option>
                    <option value="fr_DJ">French (Djibouti)</option>
                    <option value="fr_GQ">French (Equatorial Guinea)</option>
                    <option value="fr_FR">French (France)</option>
                    <option value="fr_GA">French (Gabon)</option>
                    <option value="fr_GP">French (Guadeloupe)</option>
                    <option value="fr_GN">French (Guinea)</option>
                    <option value="fr_LU">French (Luxembourg)</option>
                    <option value="fr_MG">French (Madagascar)</option>
                    <option value="fr_ML">French (Mali)</option>
                    <option value="fr_MQ">French (Martinique)</option>
                    <option value="fr_MC">French (Monaco)</option>
                    <option value="fr_NE">French (Niger)</option>
                    <option value="fr_RW">French (Rwanda)</option>
                    <option value="fr_RE">French (Réunion)</option>
                    <option value="fr_BL">French (Saint Barthélemy)</option>
                    <option value="fr_MF">French (Saint Martin)</option>
                    <option value="fr_SN">French (Senegal)</option>
                    <option value="fr_CH">French (Switzerland)</option>
                    <option value="fr_TG">French (Togo)</option>
                    <option value="ff_SN">Fulah (Senegal)</option>
                    <option value="gl_ES">Galician (Spain)</option>
                    <option value="lg_UG">Ganda (Uganda)</option>
                    <option value="ka_GE">Georgian (Georgia)</option>
                    <option value="de_AT">German (Austria)</option>
                    <option value="de_BE">German (Belgium)</option>
                    <option value="de_DE">German (Germany)</option>
                    <option value="de_LI">German (Liechtenstein)</option>
                    <option value="de_LU">German (Luxembourg)</option>
                    <option value="de_CH">German (Switzerland)</option>
                    <option value="el_CY">Greek (Cyprus)</option>
                    <option value="el_GR">Greek (Greece)</option>
                    <option value="gu_IN">Gujarati (India)</option>
                    <option value="guz_KE">Gusii (Kenya)</option>
                    <option value="ha_Latn">Hausa (Latin)</option>
                    <option value="ha_Latn_GH">Hausa (Latin, Ghana)</option>
                    <option value="ha_Latn_NE">Hausa (Latin, Niger)</option>
                    <option value="ha_Latn_NG">Hausa (Latin, Nigeria)</option>
                    <option value="haw_US">Hawaiian (United States)</option>
                    <option value="he_IL">Hebrew (Israel)</option>
                    <option value="hi_IN">Hindi (India)</option>
                    <option value="hu_HU">Hungarian (Hungary)</option>
                    <option value="is_IS">Icelandic (Iceland)</option>
                    <option value="ig_NG">Igbo (Nigeria)</option>
                    <option value="id_ID">Indonesian (Indonesia)</option>
                    <option value="ga_IE">Irish (Ireland)</option>
                    <option value="it_IT">Italian (Italy)</option>
                    <option value="it_CH">Italian (Switzerland)</option>
                    <option value="ja_JP">Japanese (Japan)</option>
                    <option value="kea_CV">Kabuverdianu (Cape Verde)</option>
                    <option value="kab_DZ">Kabyle (Algeria)</option>
                    <option value="kl_GL">Kalaallisut (Greenland)</option>
                    <option value="kln_KE">Kalenjin (Kenya)</option>
                    <option value="kam_KE">Kamba (Kenya)</option>
                    <option value="kn_IN">Kannada (India)</option>
                    <option value="kk_Cyrl">Kazakh (Cyrillic)</option>
                    <option value="kk_Cyrl_KZ">Kazakh (Cyrillic, Kazakhstan)</option>
                    <option value="km_KH">Khmer (Cambodia)</option>
                    <option value="ki_KE">Kikuyu (Kenya)</option>
                    <option value="rw_RW">Kinyarwanda (Rwanda)</option>
                    <option value="kok_IN">Konkani (India)</option>
                    <option value="ko_KR">Korean (South Korea)</option>
                    <option value="khq_ML">Koyra Chiini (Mali)</option>
                    <option value="ses_ML">Koyraboro Senni (Mali)</option>
                    <option value="lag_TZ">Langi (Tanzania)</option>
                    <option value="lv_LV">Latvian (Latvia)</option>
                    <option value="lt_LT">Lithuanian (Lithuania)</option>
                    <option value="luo_KE">Luo (Kenya)</option>
                    <option value="luy_KE">Luyia (Kenya)</option>
                    <option value="mk_MK">Macedonian (Macedonia)</option>
                    <option value="jmc_TZ">Machame (Tanzania)</option>
                    <option value="kde_TZ">Makonde (Tanzania)</option>
                    <option value="mg_MG">Malagasy (Madagascar)</option>
                    <option value="ms_BN">Malay (Brunei)</option>
                    <option value="ms_MY">Malay (Malaysia)</option>
                    <option value="ml_IN">Malayalam (India)</option>
                    <option value="mt_MT">Maltese (Malta)</option>
                    <option value="gv_GB">Manx (United Kingdom)</option>
                    <option value="mr_IN">Marathi (India)</option>
                    <option value="mas_KE">Masai (Kenya)</option>
                    <option value="mas_TZ">Masai (Tanzania)</option>
                    <option value="mer_KE">Meru (Kenya)</option>
                    <option value="mfe_MU">Morisyen (Mauritius)</option>
                    <option value="naq_NA">Nama (Namibia)</option>
                    <option value="ne_IN">Nepali (India)</option>
                    <option value="ne_NP">Nepali (Nepal)</option>
                    <option value="nd_ZW">North Ndebele (Zimbabwe)</option>
                    <option value="nb_NO">Norwegian Bokmål (Norway)</option>
                    <option value="nn_NO">Norwegian Nynorsk (Norway)</option>
                    <option value="nyn_UG">Nyankole (Uganda)</option>
                    <option value="or_IN">Oriya (India)</option>
                    <option value="om_ET">Oromo (Ethiopia)</option>
                    <option value="om_KE">Oromo (Kenya)</option>
                    <option value="ps_AF">Pashto (Afghanistan)</option>
                    <option value="fa_AF">Persian (Afghanistan)</option>
                    <option value="fa_IR">Persian (Iran)</option>
                    <option value="pl_PL">Polish (Poland)</option>
                    <option value="pt_BR">Portuguese (Brazil)</option>
                    <option value="pt_GW">Portuguese (Guinea-Bissau)</option>
                    <option value="pt_MZ">Portuguese (Mozambique)</option>
                    <option value="pt_PT">Portuguese (Portugal)</option>
                    <option value="pa_Arab">Punjabi (Arabic)</option>
                    <option value="pa_Arab_PK">Punjabi (Arabic, Pakistan)</option>
                    <option value="pa_Guru">Punjabi (Gurmukhi)</option>
                    <option value="pa_Guru_IN">Punjabi (Gurmukhi, India)</option>
                    <option value="ro_MD">Romanian (Moldova)</option>
                    <option value="ro_RO">Romanian (Romania)</option>
                    <option value="rm_CH">Romansh (Switzerland)</option>
                    <option value="rof_TZ">Rombo (Tanzania)</option>
                    <option value="ru_MD">Russian (Moldova)</option>
                    <option value="ru_RU">Russian (Russia)</option>
                    <option value="ru_UA">Russian (Ukraine)</option>
                    <option value="rwk_TZ">Rwa (Tanzania)</option>
                    <option value="saq_KE">Samburu (Kenya)</option>
                    <option value="sg_CF">Sango (Central African Republic)</option>
                    <option value="seh_MZ">Sena (Mozambique)</option>
                    <option value="sr_Cyrl">Serbian (Cyrillic)</option>
                    <option value="sr_Cyrl_BA">Serbian (Cyrillic, Bosnia and Herzegovina)</option>
                    <option value="sr_Cyrl_ME">Serbian (Cyrillic, Montenegro)</option>
                    <option value="sr_Cyrl_RS">Serbian (Cyrillic, Serbia)</option>
                    <option value="sr_Latn">Serbian (Latin)</option>
                    <option value="sr_Latn_BA">Serbian (Latin, Bosnia and Herzegovina)</option>
                    <option value="sr_Latn_ME">Serbian (Latin, Montenegro)</option>
                    <option value="sr_Latn_RS">Serbian (Latin, Serbia)</option>
                    <option value="sn_ZW">Shona (Zimbabwe)</option>
                    <option value="ii_CN">Sichuan Yi (China)</option>
                    <option value="si_LK">Sinhala (Sri Lanka)</option>
                    <option value="sk_SK">Slovak (Slovakia)</option>
                    <option value="sl_SI">Slovenian (Slovenia)</option>
                    <option value="xog_UG">Soga (Uganda)</option>
                    <option value="so_DJ">Somali (Djibouti)</option>
                    <option value="so_ET">Somali (Ethiopia)</option>
                    <option value="so_KE">Somali (Kenya)</option>
                    <option value="so_SO">Somali (Somalia)</option>
                    <option value="es_AR">Spanish (Argentina)</option>
                    <option value="es_BO">Spanish (Bolivia)</option>
                    <option value="es_CL">Spanish (Chile)</option>
                    <option value="es_CO">Spanish (Colombia)</option>
                    <option value="es_CR">Spanish (Costa Rica)</option>
                    <option value="es_DO">Spanish (Dominican Republic)</option>
                    <option value="es_EC">Spanish (Ecuador)</option>
                    <option value="es_SV">Spanish (El Salvador)</option>
                    <option value="es_GQ">Spanish (Equatorial Guinea)</option>
                    <option value="es_GT">Spanish (Guatemala)</option>
                    <option value="es_HN">Spanish (Honduras)</option>
                    <option value="es_419">Spanish (Latin America)</option>
                    <option value="es_MX">Spanish (Mexico)</option>
                    <option value="es_NI">Spanish (Nicaragua)</option>
                    <option value="es_PA">Spanish (Panama)</option>
                    <option value="es_PY">Spanish (Paraguay)</option>
                    <option value="es_PE">Spanish (Peru)</option>
                    <option value="es_PR">Spanish (Puerto Rico)</option>
                    <option value="es_ES">Spanish (Spain)</option>
                    <option value="es_US">Spanish (United States)</option>
                    <option value="es_UY">Spanish (Uruguay)</option>
                    <option value="es_VE">Spanish (Venezuela)</option>
                    <option value="sw_KE">Swahili (Kenya)</option>
                    <option value="sw_TZ">Swahili (Tanzania)</option>
                    <option value="sv_FI">Swedish (Finland)</option>
                    <option value="sv_SE">Swedish (Sweden)</option>
                    <option value="gsw_CH">Swiss German (Switzerland)</option>
                    <option value="shi_Latn">Tachelhit (Latin)</option>
                    <option value="shi_Latn_MA">Tachelhit (Latin, Morocco)</option>
                    <option value="shi_Tfng">Tachelhit (Tifinagh)</option>
                    <option value="shi_Tfng_MA">Tachelhit (Tifinagh, Morocco)</option>
                    <option value="dav_KE">Taita (Kenya)</option>
                    <option value="ta_IN">Tamil (India)</option>
                    <option value="ta_LK">Tamil (Sri Lanka)</option>
                    <option value="te_IN">Telugu (India)</option>
                    <option value="teo_KE">Teso (Kenya)</option>
                    <option value="teo_UG">Teso (Uganda)</option>
                    <option value="th_TH">Thai (Thailand)</option>
                    <option value="bo_CN">Tibetan (China)</option>
                    <option value="bo_IN">Tibetan (India)</option>
                    <option value="ti_ER">Tigrinya (Eritrea)</option>
                    <option value="ti_ET">Tigrinya (Ethiopia)</option>
                    <option value="to_TO">Tonga (Tonga)</option>
                    <option value="tr_TR">Turkish (Turkey)</option>
                    <option value="uk_UA">Ukrainian (Ukraine)</option>
                    <option value="ur_IN">Urdu (India)</option>
                    <option value="ur_PK">Urdu (Pakistan)</option>
                    <option value="uz_Arab">Uzbek (Arabic)</option>
                    <option value="uz_Arab_AF">Uzbek (Arabic, Afghanistan)</option>
                    <option value="uz_Cyrl">Uzbek (Cyrillic)</option>
                    <option value="uz_Cyrl_UZ">Uzbek (Cyrillic, Uzbekistan)</option>
                    <option value="uz_Latn">Uzbek (Latin)</option>
                    <option value="uz_Latn_UZ">Uzbek (Latin, Uzbekistan)</option>
                    <option value="vi_VN">Vietnamese (Vietnam)</option>
                    <option value="vun_TZ">Vunjo (Tanzania)</option>
                    <option value="cy_GB">Welsh (United Kingdom)</option>
                    <option value="yo_NG">Yoruba (Nigeria)</option>
                    <option value="zu_ZA">Zulu (South Africa)</option>
                </select>
            </li>
            <li>
                <label for="number">Number</label>
                <input type="text" id="number" name="number">
            </li>
            <li>
                <button type="submit" class="btn-submit">Convert</button>
            </li>
        </ul>
    </form>

    <pre>
        <code class="result">
        <div id="loading" style="display:none;padding: 15px 20px 12px 22px;"><span>converting...</span></div>
            <div class="response">Please select language and enter number for conversion</div>
        </code>
    </pre>

</div>


<script type="text/javascript">

    $(document).ready(function () {
        $("select").select2();
    });

    $('#number').bind('keyup', function () {
        $('.btn-submit').click();
    });
    $('#locale').change(function () {
        $('.btn-submit').click();
    });

    /*$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });*/

    $(".btn-submit").click(function (e) {
        e.preventDefault();

        var number = $("input[name=number]").val();
        var locale = $("select[name=locale]").val();

        $.ajax({
            type: 'POST',
            url: "{{ route('api.convert') }}",
            data: {number: number, locale: locale},
            success: function (data) {
                //console.log(data);
                $(".response").empty();
                $(".response").append(data);
            },
            error: function (request, status, errors) {
                $.each(request.responseJSON.errors, function (field_name, error) {
                    $(".response").append(error);
                    $(".response").append(document.createElement('br'));
                })
            },
            beforeSend: function () {
                $(".response").empty();
                $('#loading').css('display', 'block');
            },
            complete: function () {
                $('#loading').css('display', 'none');
            }
        });
    });
</script>

</body>
</html>
