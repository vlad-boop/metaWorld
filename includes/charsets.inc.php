<?php
	$charsetOptions['ASMO-708'] = 'Arabic (ASMO 708)';
	$charsetOptions['DOS-720'] = 'Arabic (DOS)';
	$charsetOptions['iso-8859-6'] = 'Arabic (ISO)';
	$charsetOptions['x-mac-arabic'] = 'Arabic (Mac)';
	$charsetOptions['windows-1256'] = 'Arabic (Windows)';
	$charsetOptions['ibm775'] = 'Baltic (DOS)';
	$charsetOptions['iso-8859-4'] = 'Baltic (ISO)';
	$charsetOptions['windows-1257'] = 'Baltic (Windows)';
	$charsetOptions['ibm852'] = 'Central European (DOS)';
	$charsetOptions['iso-8859-2'] = 'Central European (ISO)';
	$charsetOptions['x-mac-ce'] = 'Central European (Mac)';
	$charsetOptions['windows-1250'] = 'Central European (Windows)';
	$charsetOptions['EUC-CN'] = 'Chinese Simplified (EUC)';
	$charsetOptions['gb2312'] = 'Chinese Simplified (GB2312)';
	$charsetOptions['hz-gb-2312'] = 'Chinese Simplified (HZ)';
	$charsetOptions['x-mac-chinesesimp'] = 'Chinese Simplified (Mac)';
	$charsetOptions['big5'] = 'Chinese Traditional (Big5)';
	$charsetOptions['x-Chinese-CNS'] = 'Chinese Traditional (CNS)';
	$charsetOptions['x-Chinese-Eten'] = 'Chinese Traditional (Eten)';
	$charsetOptions['x-mac-chinesetrad'] = 'Chinese Traditional (Mac)';
	$charsetOptions['cp866'] = 'Cyrillic (DOS)';
	$charsetOptions['iso-8859-5'] = 'Cyrillic (ISO)';
	$charsetOptions['koi8-r'] = 'Cyrillic (KOI8-R)';
	$charsetOptions['koi8-u'] = 'Cyrillic (KOI8-U)';
	$charsetOptions['x-mac-cyrillic'] = 'Cyrillic (Mac)';
	$charsetOptions['windows-1251'] = 'Cyrillic (Windows)';
	$charsetOptions['x-Europa'] = 'Europa';
	$charsetOptions['x-IA5-German'] = 'German (IA5)';
	$charsetOptions['ibm737'] = 'Greek (DOS)';
	$charsetOptions['iso-8859-7'] = 'Greek (ISO)';
	$charsetOptions['x-mac-greek'] = 'Greek (Mac)';
	$charsetOptions['windows-1253'] = 'Greek (Windows)';
	$charsetOptions['ibm869'] = 'Greek, Modern (DOS)';
	$charsetOptions['DOS-862'] = 'Hebrew (DOS)';
	$charsetOptions['iso-8859-8-i'] = 'Hebrew (ISO-Logical)';
	$charsetOptions['iso-8859-8'] = 'Hebrew (ISO-Visual)';
	$charsetOptions['x-mac-hebrew'] = 'Hebrew (Mac)';
	$charsetOptions['windows-1255'] = 'Hebrew (Windows)';
	$charsetOptions['ibm861'] = 'Icelandic (DOS)';
	$charsetOptions['x-mac-icelandic'] = 'Icelandic (Mac)';
	$charsetOptions['x-iscii-as'] = 'ISCII Assamese';
	$charsetOptions['x-iscii-be'] = 'ISCII Bengali';
	$charsetOptions['x-iscii-de'] = 'ISCII Devanagari';
	$charsetOptions['x-iscii-gu'] = 'ISCII Gujarathi';
	$charsetOptions['x-iscii-ka'] = 'ISCII Kannada';
	$charsetOptions['x-iscii-ma'] = 'ISCII Malayalam';
	$charsetOptions['x-iscii-or'] = 'ISCII Oriya';
	$charsetOptions['x-iscii-pa'] = 'ISCII Panjabi';
	$charsetOptions['x-iscii-ta'] = 'ISCII Tamil';
	$charsetOptions['x-iscii-te'] = 'ISCII Telugu';
	$charsetOptions['euc-jp'] = 'Japanese (EUC)';
	$charsetOptions['iso-2022-jp'] = 'Japanese (JIS)';
	$charsetOptions['x-mac-japanese'] = 'Japanese (Mac)';
	$charsetOptions['shift_jis'] = 'Japanese (Shift-JIS)';
	$charsetOptions['ks_c_5601-1987'] = 'Korean';
	$charsetOptions['euc-kr'] = 'Korean (EUC)';
	$charsetOptions['iso-2022-kr'] = 'Korean (ISO)';
	$charsetOptions['Johab'] = 'Korean (Johab)';
	$charsetOptions['x-mac-korean'] = 'Korean (Mac)';
	$charsetOptions['iso-8859-3'] = 'Latin 3 (ISO)';
	$charsetOptions['iso-8859-15'] = 'Latin 9 (ISO)';
	$charsetOptions['x-IA5-Norwegian'] = 'Norwegian (IA5)';
	$charsetOptions['IBM437'] = 'OEM United States';
	$charsetOptions['x-IA5-Swedish'] = 'Swedish (IA5)';
	$charsetOptions['windows-874'] = 'Thai (Windows)';
	$charsetOptions['ibm857'] = 'Turkish (DOS)';
	$charsetOptions['iso-8859-9'] = 'Turkish (ISO)';
	$charsetOptions['x-mac-turkish'] = 'Turkish (Mac)';
	$charsetOptions['windows-1254'] = 'Turkish (Windows)';
	$charsetOptions['unicode'] = 'Unicode';
	$charsetOptions['unicodeFFFE'] = 'Unicode (Big-Endian)';
	$charsetOptions['utf-7'] = 'Unicode (UTF-7)';
	$charsetOptions['utf-8'] = 'Unicode (UTF-8)';
	$charsetOptions['us-ascii'] = 'US-ASCII';
	$charsetOptions['windows-1258'] = 'Vietnamese (Windows)';
	$charsetOptions['ibm850'] = 'Western European (DOS)';
	$charsetOptions['x-IA5'] = 'Western European (IA5)';
	$charsetOptions['iso-8859-1'] = 'Western European (ISO)';
	$charsetOptions['macintosh'] = 'Western European (Mac)';
	$charsetOptions['windows-1252'] = 'Western European (Windows)';
	$smarty->assign('charsetOptions', $charsetOptions);

	$languageCharsets = array(
		'ab'=>'windows-1252',
		'ar'=>'windows-1256',
		'hy'=>'windows-1252',
		'az'=>'windows-1252',
		'eu'=>'windows-1252',
		'be'=>'windows-1250',
		'bn'=>'utf-8',
		'bs'=>'utf-8',
		'bg'=>'windows-1251',
		'ca'=>'windows-1252',
		'zh'=>'big5',
		'hr'=>'windows-1250',
		'cs'=>'windows-1250',
		'da'=>'windows-1252',
		'nl'=>'windows-1252',
		'en'=>'utf-8',
		'eo'=>'windows-1252',
		'et'=>'windows-1257',
		'fo'=>'windows-1252',
		'fi'=>'windows-1252',
		'fr'=>'windows-1252',
		'ka'=>'windows-1252',
		'de'=>'windows-1252',
		'el'=>'windows-1253',
		'he'=>'windows-1255',
		'hi'=>'utf-8',
		'hu'=>'windows-1250',
		'id'=>'windows-1252',
		'ga'=>'windows-1252',
		'it'=>'windows-1252',
		'ja'=>'iso-2022-jp',
		'kk'=>'windows-1252',
		'ky'=>'windows-1252',
		'ko'=>'iso-2022-kr',
		'ku'=>'utf-8',
		'la'=>'windows-1252',
		'lv'=>'windows-1257',
		'lt'=>'windows-1257',
		'mk'=>'utf-8',
		'ms'=>'windows-1252',
		'mo'=>'utf-8',
		'mn'=>'utf-8',
		'no'=>'windows-1252',
		'os'=>'windows-1252',
		'fa'=>'utf-8',
		'pl'=>'windows-1250',
		'pt'=>'windows-1252',
		'ro'=>'windows-1250',
		'ru'=>'utf-8',
		'sa'=>'utf-8',
		'sr'=>'windows-1251',
		'sk'=>'windows-1250',
		'sl'=>'windows-1250',
		'es'=>'windows-1252',
		'sv'=>'windows-1252',
		'tg'=>'windows-1252',
		'tt'=>'windows-1252',
		'th'=>'windows-874',
		'tr'=>'windows-1254',
		'tk'=>'windows-1252',
		'ug'=>'windows-1252',
		'uk'=>'windows-1251',
		'uz'=>'utf-8',
		'vi'=>'windows-1258',
	);
	$smarty->assign('languageCharsets', $languageCharsets);
?>