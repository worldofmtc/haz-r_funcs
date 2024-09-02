<?php 

function kodOluştur($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}



function linkify_title($title) {
    // Başlıkta bulunan boşlukları '-' ile değiştirme
    $linkified_title = str_replace(' ', '-', $title);
    // Türkçe karakterleri İngilizce karakterlere dönüştürme
    $degistirme = array(
        'ç' => 'c',
        'Ç' => 'C',
        'ğ' => 'g',
        'Ğ' => 'G',
        'ı' => 'i',
        'İ' => 'I',
        'ö' => 'o',
        'Ö' => 'O',
        'ş' => 's',
        'Ş' => 'S',
        'ü' => 'u',
        'Ü' => 'U',
    );
    $linkified_title = strtr($linkified_title, $degistirme);
    // Diğer özel karakterleri kaldırma ve küçük harflere dönüştürme
    $linkified_title = preg_replace('/[^\p{L}\p{N}\s-]/u', '', $linkified_title);
    $linkified_title = preg_replace('/\s+/', '-', $linkified_title);
    $linkified_title = strtolower($linkified_title);
    return $linkified_title;
}

?>