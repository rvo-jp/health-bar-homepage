<?php
$lang_list = [
    'en', 'en-US', 'en-GB',
    'es-ES', 'es-MX',
    'de-DE',
    'fr-FR', 'fr-CA',
    'pt-PT', 'pt-BR',
    'id',
    'ru',
    'ko',
    'zh-CN',
    'ja',
    'tr',
    'vi'
];
$lang = isset($_GET['lang']) ? $_GET['lang'] : explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];
if (!in_array($lang, $lang_list, true)) $lang = 'en';

$currency_by_lang = [
    'en'    => 'USD',  // 英語（汎用）
    'en-US' => 'USD',  // アメリカ合衆国ドル
    'en-GB' => 'GBP',  // イギリス ポンド
    'es-ES' => 'EUR',  // スペイン ユーロ
    'es-MX' => 'MXN',  // メキシコ ペソ
    'de-DE' => 'EUR',  // ドイツ ユーロ
    'fr-FR' => 'EUR',  // フランス ユーロ
    'fr-CA' => 'CAD',  // カナダ ドル
    'pt-PT' => 'EUR',  // ポルトガル ユーロ
    'pt-BR' => 'BRL',  // ブラジル レアル
    'id'    => 'IDR',  // インドネシア ルピア
    'ru'    => 'RUB',  // ロシア ルーブル
    'ko'    => 'KRW',  // 韓国 ウォン
    'zh-CN' => 'CNY',  // 中国 人民元
    'ja'    => 'JPY',  // 日本 円
    'tr'    => 'TRY',  // トルコ リラ
    'vi'    => 'VND',  // ベトナム ドン
];

$title = [
    'en'    => 'Health Bar - Minecraft Resource Pack',
    'en-US' => 'Health Bar - Minecraft Resource Pack',
    'en-GB' => 'Health Bar - Minecraft Resource Pack',
    'es-ES' => 'Barra de salud - Paquete de recursos de Minecraft',
    'es-MX' => 'Barra de salud - Paquete de recursos de Minecraft',
    'pt-PT' => 'Barra de Vida - Pacote de Recursos do Minecraft',
    'pt-BR' => 'Barra de Vida - Pacote de Recursos do Minecraft',
    'fr-FR' => 'Barre de vie - Pack de ressources Minecraft',
    'fr-CA' => 'Barre de vie - Pack de ressources Minecraft',
    'de-DE' => 'Health Bar - Minecraft Ressourcenpaket',
    'id'    => 'Health Bar - Paket Resource Minecraft',
    'ru'    => 'Индикатор Здоровья - Ресурс-пак для Minecraft',
    'ko'    => 'Health Bar - 마인크래프트 리소스 팩',
    'zh-CN' => 'Health Bar - 我的世界资源包',
    'ja'    => 'Health Bar - マインクラフト リソースパック',
    'tr'    => 'Health Bar - Minecraft Kaynak Paketi',
    'vi'    => 'Health Bar - Gói tài nguyên Minecraft',
][$lang];

$description = [
    'en'    => 'Adds a visual health indicator above all mobs in Minecraft, showing both a health bar and the exact health value.',
    'en-US' => 'Adds a visual health indicator above all mobs in Minecraft, showing both a health bar and the exact health value.',
    'en-GB' => 'Adds a visual health indicator above all mobs in Minecraft, showing both a health bar and the exact health value.',
    'es-ES' => 'Agrega un indicador visual de salud sobre todas las criaturas en Minecraft, mostrando una barra de salud y el valor exacto de salud.',
    'es-MX' => 'Agrega un indicador visual de salud sobre todas las criaturas en Minecraft, mostrando una barra de salud y el valor exacto de salud.',
    'de-DE' => 'Fügt über allen Kreaturen in Minecraft einen visuellen Gesundheitsindikator hinzu, der eine Gesundheitsleiste und den genauen Gesundheitswert anzeigt.',
    'fr-FR' => 'Ajoute un indicateur de santé visuel au-dessus de tous les monstres dans Minecraft, affichant une barre de santé et la valeur exacte des points de vie.',
    'fr-CA' => 'Ajoute un indicateur de santé visuel au-dessus de tous les monstres dans Minecraft, affichant une barre de santé et la valeur exacte des points de vie.',
    'pt-PT' => 'Adiciona um indicador visual de saúde acima de todos os mobs no Minecraft, mostrando uma barra de saúde e o valor exato da vida.',
    'pt-BR' => 'Adiciona um indicador visual de saúde acima de todos os mobs no Minecraft, mostrando uma barra de saúde e o valor exato da vida.',
    'id'    => 'Menambahkan indikator kesehatan visual di atas semua mob di Minecraft, menampilkan bilah kesehatan dan nilai kesehatan yang tepat.',
    'ru'    => 'Добавляет визуальный индикатор здоровья над всеми мобами в Minecraft, показывая шкалу здоровья и точное значение здоровья.',
    'ko'    => '마인크래프트의 모든 몹 위에 시각적인 체력 표시기를 추가하며, 체력 바와 정확한 체력 수치를 표시합니다.',
    'zh-CN' => '在 Minecraft 所有生物上方添加可视化生命值指示器，显示生命条和精确生命值。',
    'ja'    => 'すべてのモブの上に視覚的な体力インジケーターを追加します。体力バーと正確な体力値を表示します。',
    'tr'    => 'Minecraft\'teki tüm yaratıkların üzerinde bir sağlık çubuğu ve kesin sağlık değerini gösteren görsel bir sağlık göstergesi ekler.',
    'vi'    => 'Thêm chỉ báo máu hiển thị phía trên tất cả mob trong Minecraft, hiển thị thanh máu và giá trị máu chính xác.',
][$lang];

$subtitle = [
    'en'    => 'A visual health indicator',
    'en-US' => 'A visual health indicator',
    'en-GB' => 'A visual health indicator',
    'es-ES' => 'Un indicador visual de salud',
    'es-MX' => 'Un indicador visual de salud',
    'de-DE' => 'Eine visuelle Gesundheitsanzeige',
    'fr-FR' => 'Un indicateur visuel de santé',
    'fr-CA' => 'Un indicateur visuel de santé',
    'pt-PT' => 'Um indicador visual de saúde',
    'pt-BR' => 'Um indicador visual de saúde',
    'id'    => 'Indikator kesehatan visual',
    'ru'    => 'Визуальный индикатор здоровья',
    'ko'    => '시각적인 체력 표시기',
    'zh-CN' => '视觉生命值指示器',
    'ja'    => '視覚的な体力インジケーター',
    'tr'    => 'Görsel sağlık göstergesi',
    'vi'    => 'Bộ chỉ báo sức khỏe trực quan'
][$lang];

$download_text = [
    'en'    => 'DOWNLOAD',
    'en-US' => 'DOWNLOAD',
    'en-GB' => 'DOWNLOAD',
    'es-ES' => 'DESCARGAR',
    'es-MX' => 'DESCARGAR',
    'de-DE' => 'HERUNTERLADEN',
    'fr-FR' => 'TÉLÉCHARGER',
    'fr-CA' => 'TÉLÉCHARGER',
    'pt-PT' => 'DESCARREGAR',
    'pt-BR' => 'BAIXAR',
    'id'    => 'UNDUH',
    'ru'    => 'СКАЧАТЬ',
    'ko'    => '다운로드',
    'zh-CN' => '下载',
    'ja'    => 'ダウンロード',
    'tr'    => 'İNDİR',
    'vi'    => 'TẢI VỀ'
][$lang];

$preview = [
    'en'    => 'Preview',
    'en-US' => 'Preview',
    'en-GB' => 'Preview',
    'es-ES' => 'Vista previa',
    'es-MX' => 'Vista previa',
    'de-DE' => 'Vorschau',
    'fr-FR' => 'Aperçu',
    'fr-CA' => 'Aperçu',
    'pt-PT' => 'Pré-visualização',
    'pt-BR' => 'Pré-visualização',
    'id'    => 'Pratinjau',
    'ru'    => 'Предпросмотр',
    'ko'    => '미리보기',
    'zh-CN' => '预览',
    'ja'    => 'プレビュー',
    'tr'    => 'Önizleme',
    'vi'    => 'Xem trước'
][$lang];

$news = [
    'en'    => 'News',
    'en-US' => 'News',
    'en-GB' => 'News',
    'es-ES' => 'Noticias',
    'es-MX' => 'Noticias',
    'de-DE' => 'Neuigkeiten',
    'fr-FR' => 'Actualités',
    'fr-CA' => 'Actualités',
    'pt-PT' => 'Notícias',
    'pt-BR' => 'Notícias',
    'id'    => 'Berita',
    'ru'    => 'Новости',
    'ko'    => '소식',
    'zh-CN' => '新闻',
    'ja'    => 'ニュース',
    'tr'    => 'Haberler',
    'vi'    => 'Tin tức'
][$lang];

$news_sub = [
    'en'    => 'Health Bar is continuously being optimized and refined with minor bug fixes to support the latest version!',
    'en-US' => 'Health Bar is continuously being optimized and refined with minor bug fixes to support the latest version!',
    'en-GB' => 'Health Bar is continuously being optimised and refined with minor bug fixes to support the latest version!',
    'es-ES' => '¡Health Bar se optimiza y mejora continuamente con correcciones menores para ser compatible con la última versión!',
    'es-MX' => '¡Health Bar se optimiza y mejora continuamente con correcciones menores para ser compatible con la última versión!',
    'de-DE' => 'Health Bar wird kontinuierlich optimiert und mit kleinen Fehlerbehebungen aktualisiert, um die neueste Version zu unterstützen!',
    'fr-FR' => 'Health Bar est continuellement optimisé et amélioré avec des corrections mineures pour prendre en charge la dernière version !',
    'fr-CA' => 'Health Bar est continuellement optimisé et amélioré avec des corrections mineures pour prendre en charge la dernière version !',
    'pt-PT' => 'Health Bar está a ser continuamente otimizado e melhorado com pequenas correções para suportar a versão mais recente!',
    'pt-BR' => 'Health Bar está sendo continuamente otimizado e aprimorado com pequenas correções para oferecer suporte à versão mais recente!',
    'id'    => 'Health Bar terus dioptimalkan dan diperbaiki dengan perbaikan bug kecil untuk mendukung versi terbaru!',
    'ru'    => 'Health Bar постоянно оптимизируется и улучшается с помощью незначительных исправлений ошибок для поддержки последней версии!',
    'ko'    => 'Health Bar는 최신 버전을 지원하기 위해 지속적으로 최적화되고 버그 수정이 이루어지고 있습니다!',
    'zh-CN' => 'Health Bar 正在不断优化和改进，并进行小幅修复以支持最新版本！',
    'ja'    => 'Health Bar は最新バージョンに対応するため、継続的に最適化とバグ修正を行っています！',
    'tr'    => 'Health Bar, en son sürümü desteklemek için küçük hata düzeltmeleriyle sürekli olarak optimize edilmekte ve geliştirilmektedir!',
    'vi'    => 'Health Bar liên tục được tối ưu hóa và cải tiến với các bản sửa lỗi nhỏ để hỗ trợ phiên bản mới nhất!'
][$lang];

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $title?> | Rvo Works</title>
    <meta name="description" content="<?= $description?>">
    <link rel="icon" href="/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/common/apple-touch-icon.png">
    
    <link rel="canonical" href="https://rvo.jp/health-bar/">
    <link rel="alternate" hreflang="en"    href="https://rvo.jp/health-bar/?lang=en">
    <link rel="alternate" hreflang="en-US" href="https://rvo.jp/health-bar/?lang=en-US">
    <link rel="alternate" hreflang="en-GB" href="https://rvo.jp/health-bar/?lang=en-GB">
    <link rel="alternate" hreflang="es-ES" href="https://rvo.jp/health-bar/?lang=es-ES">
    <link rel="alternate" hreflang="es-MX" href="https://rvo.jp/health-bar/?lang=es-MX">
    <link rel="alternate" hreflang="de-DE" href="https://rvo.jp/health-bar/?lang=de-DE">
    <link rel="alternate" hreflang="fr-FR" href="https://rvo.jp/health-bar/?lang=fr-FR">
    <link rel="alternate" hreflang="fr-CA" href="https://rvo.jp/health-bar/?lang=fr-CA">
    <link rel="alternate" hreflang="pt-PT" href="https://rvo.jp/health-bar/?lang=pt-PT">
    <link rel="alternate" hreflang="pt-BR" href="https://rvo.jp/health-bar/?lang=pt-BR">
    <link rel="alternate" hreflang="id"    href="https://rvo.jp/health-bar/?lang=id">
    <link rel="alternate" hreflang="ru"    href="https://rvo.jp/health-bar/?lang=ru">
    <link rel="alternate" hreflang="ko"    href="https://rvo.jp/health-bar/?lang=ko">
    <link rel="alternate" hreflang="zh-CN" href="https://rvo.jp/health-bar/?lang=zh-CN">
    <link rel="alternate" hreflang="ja"    href="https://rvo.jp/health-bar/?lang=ja">
    <link rel="alternate" hreflang="tr"    href="https://rvo.jp/health-bar/?lang=tr">
    <link rel="alternate" hreflang="vi"    href="https://rvo.jp/health-bar/?lang=vi">
    <link rel="alternate" hreflang="x-default" href="https://rvo.jp/health-bar/">

    <meta property="og:title" content="<?= $title?>">
    <meta property="og:description" content="<?= $description?>">
    <meta property="og:image" content="https://rvo.jp/health-bar/img/og-image.jpg">
    <meta property="og:url" content="https://rvo.jp/health-bar/">
    <meta property="og:site_name" content="Rvo Works">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title?>">
    <meta name="twitter:description" content="<?= $description?>">
    <meta name="twitter:image" content="https://rvo.jp/health-bar/img/og-image.jpg">

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div id="inner">
            <a href="/">
                <h2 id="logo"><svg width="40px" height="40px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="gamingGradient" x1="25%" y1="0%" x2="75%" y2="100%"><stop offset="0%" stop-color="#00ffee"/><stop offset="50%" stop-color="#8e2eff"/><stop offset="100%" stop-color="#ff00aa"/></linearGradient><filter id="glow" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur stdDeviation="1" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs><path d="m6.5 10.5 v-0.5 l-3 -4 h21.5 l3 4 v1.5 l-3 4 h-3 h3 l3 4 v1.5 l-6 8 l-3 -4 h-2.5 v-10 v10 h-10 v-14.5 h15.5" stroke="url(#gamingGradient)" stroke-width="1.5" fill="none" filter="url(#glow)"/></svg> Rvo Works</h2>
            </a>
            <div id="nav">
                <p>Contact</p>
                <p>Addons</p>
                <a href="https://discordapp.com/users/642606556151545857"><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.59 5.88997C17.36 5.31997 16.05 4.89997 14.67 4.65997C14.5 4.95997 14.3 5.36997 14.17 5.69997C12.71 5.47997 11.26 5.47997 9.83001 5.69997C9.69001 5.36997 9.49001 4.95997 9.32001 4.65997C7.94001 4.89997 6.63001 5.31997 5.40001 5.88997C2.92001 9.62997 2.25001 13.28 2.58001 16.87C4.23001 18.1 5.82001 18.84 7.39001 19.33C7.78001 18.8 8.12001 18.23 8.42001 17.64C7.85001 17.43 7.31001 17.16 6.80001 16.85C6.94001 16.75 7.07001 16.64 7.20001 16.54C10.33 18 13.72 18 16.81 16.54C16.94 16.65 17.07 16.75 17.21 16.85C16.7 17.16 16.15 17.42 15.59 17.64C15.89 18.23 16.23 18.8 16.62 19.33C18.19 18.84 19.79 18.1 21.43 16.87C21.82 12.7 20.76 9.08997 18.61 5.88997H18.59ZM8.84001 14.67C7.90001 14.67 7.13001 13.8 7.13001 12.73C7.13001 11.66 7.88001 10.79 8.84001 10.79C9.80001 10.79 10.56 11.66 10.55 12.73C10.55 13.79 9.80001 14.67 8.84001 14.67ZM15.15 14.67C14.21 14.67 13.44 13.8 13.44 12.73C13.44 11.66 14.19 10.79 15.15 10.79C16.11 10.79 16.87 11.66 16.86 12.73C16.86 13.79 16.11 14.67 15.15 14.67Z" fill="#ffffff"></path> </g></svg></a>
                <a href="http://github.com/rvo-jp/"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>github [#142]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"> </path> </g> </g> </g> </g></svg></a>
            </div>
        </div>
    </header>

    <div id="top">
        <div id="top_text">
            <p id="name">Health Bar</p>
            <p id="sub"><?= $subtitle ?></p>
            <div id="dl">
                <a href="./download/download.php" download><p id="download"><?= $download_text ?> <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Download"> <path id="Vector" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g></g></svg></p></a>
                <p id="counter"><?= number_format((int)file_get_contents('download/count.txt')) ?> downloads</p>
            </div>
        </div>
    </div>

    <div id="menu">
        <div id="mn">
            <a href="./#preview"><?= $preview ?></a>
            <a href="./#changelog"><?= $news ?></a>
            <a href="./#features">Features</a>
            <a href="./#faq">FAQ & Feedback</a>
        </div>
    </div>

    <div id="preview">
        <h1><?= $preview ?></h1>
        <iframe src="https://www.youtube.com/embed/dq4LVuiWNjs?si=kB_zIH2BrIp6nmjt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div id="changelog">
        <div id="news">
            <h1><?= $news ?></h1>
            <h3><?= $news_sub ?></h3>
        </div>
        <div id="latest">
            <div id="newimg"></div>
            <div class="des">
                <p class="type">UPDATE & BUGFIX</p>
                <h2>Version 3.4.0 — July 27 2025</h2>
                <p>This update adds support for the newly introduced mob, the "Happy Ghast," from Minecraft v1.21.90. It also fixes a bug that caused Creepers to always appear charged with lightning, and resolves an issue where Ghasts were displayed at an abnormally large size.</p>
                <a href="http://github.com/rvo-jp/health-bar/">Learn more on GitHub<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_429_11254)"> <path d="M10 17L15 12" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 12L10 7" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <defs> <clipPath id="clip0_429_11254"> <rect width="24" height="24" fill="white"></rect> </clipPath> </defs> </g></svg></a>
            </div>
        </div>

        <div id="donation">
            <div class="des">
                <h2><svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4 21h9.62a3.995 3.995 0 0 0 3.037-1.397l5.102-5.952a1 1 0 0 0-.442-1.6l-1.968-.656a3.043 3.043 0 0 0-2.823.503l-3.185 2.547-.617-1.235A3.98 3.98 0 0 0 9.146 11H4c-1.103 0-2 .897-2 2v6c0 1.103.897 2 2 2zm0-8h5.146c.763 0 1.448.423 1.789 1.105l.447.895H7v2h6.014a.996.996 0 0 0 .442-.11l.003-.001.004-.002h.003l.002-.001h.004l.001-.001c.009.003.003-.001.003-.001.01 0 .002-.001.002-.001h.001l.002-.001.003-.001.002-.001.002-.001.003-.001.002-.001c.003 0 .001-.001.002-.001l.003-.002.002-.001.002-.001.003-.001.002-.001h.001l.002-.001h.001l.002-.001.002-.001c.009-.001.003-.001.003-.001l.002-.001a.915.915 0 0 0 .11-.078l4.146-3.317c.262-.208.623-.273.94-.167l.557.186-4.133 4.823a2.029 2.029 0 0 1-1.52.688H4v-6zM16 2h-.017c-.163.002-1.006.039-1.983.705-.951-.648-1.774-.7-1.968-.704L12.002 2h-.004c-.801 0-1.555.313-2.119.878C9.313 3.445 9 4.198 9 5s.313 1.555.861 2.104l3.414 3.586a1.006 1.006 0 0 0 1.45-.001l3.396-3.568C18.688 6.555 19 5.802 19 5s-.313-1.555-.878-2.121A2.978 2.978 0 0 0 16.002 2H16zm1 3c0 .267-.104.518-.311.725L14 8.55l-2.707-2.843C11.104 5.518 11 5.267 11 5s.104-.518.294-.708A.977.977 0 0 1 11.979 4c.025.001.502.032 1.067.485.081.065.163.139.247.222l.707.707.707-.707c.084-.083.166-.157.247-.222.529-.425.976-.478 1.052-.484a.987.987 0 0 1 .701.292c.189.189.293.44.293.707z"></path></g></svg> Support the Project</h2>
                <p>If you like this resource pack, consider supporting its development! Even a small donation helps keep it updated and polished.</p>
                <a href="https://buy.stripe.com/your-link">Donate 1 doller<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_429_11254)"> <path d="M10 17L15 12" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 12L10 7" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <defs> <clipPath id="clip0_429_11254"> <rect width="24" height="24" fill="white"></rect> </clipPath> </defs> </g></svg></a>
            </div>
        </div>

    </div>

    <div id="features">
        <div>
            <div id="a1" class="pic"></div>
            <div>
                <h1>Bar & Counter</h1>
                <p>Shows a health bar and exact health value above all vanilla mobs, making it easy to track their remaining HP.</p>
            </div>
        </div>
        <hr>
        <div>
            <div>
                <h1>Color-coded Levels</h1>
                <p>The health bar changes color based on the remaining health: green (51-100%), yellow (21-50%), and red (1-20%)—making it easy to assess a mob’s condition at a glance.</p>
            </div>
            <div id="a2" class="pic"></div>
        </div>
        <hr>
        <div>
            <div id="a3" class="pic"></div>
            <div>
                <h1>Always Visible</h1>
                <p>Both the bar and numbers glow in the dark, ensuring clear visibility in any lighting condition.</p>
            </div>
        </div>
        <hr>
    </div>

    <div id="faq">
        <h1>FAQ</h1>
        <div id="qlist">
            <div class="q">
                <p>Does this support mobs from other addons?</p>
                <p class="a hidden">Currently, it only supports vanilla mobs. There are no plans to support mobs from other addons in future updates.</p>
            </div>
            <div class="q">
                <p>Can I use this with animation packs like "Actions & Stuff"?</p>
                <p class="a hidden">No, it is not compatible. I also do not plan to add compatibility with specific addons in the future.</p>
            </div>
        </div>

        <div id="form">
            <h1>Feedback</h1>
            <div id="feedbackform">
                <p>Feel free to share your feedback, comments, or bug reports — your input helps improve the mcpack!</p>
                <textarea id="feedback" rows="5" placeholder="Enter here"></textarea>
                <p>If you'd like a reply, please provide your email address below:</p>
                <input type="email" id="email" placeholder="Your email address (optional)">
                <p id="send">Send <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.3009 13.6949L20.102 3.89742M10.5795 14.1355L12.8019 18.5804C13.339 19.6545 13.6075 20.1916 13.9458 20.3356C14.2394 20.4606 14.575 20.4379 14.8492 20.2747C15.1651 20.0866 15.3591 19.5183 15.7472 18.3818L19.9463 6.08434C20.2845 5.09409 20.4535 4.59896 20.3378 4.27142C20.2371 3.98648 20.013 3.76234 19.7281 3.66167C19.4005 3.54595 18.9054 3.71502 17.9151 4.05315L5.61763 8.2523C4.48114 8.64037 3.91289 8.83441 3.72478 9.15032C3.56153 9.42447 3.53891 9.76007 3.66389 10.0536C3.80791 10.3919 4.34498 10.6605 5.41912 11.1975L9.86397 13.42C10.041 13.5085 10.1295 13.5527 10.2061 13.6118C10.2742 13.6643 10.3352 13.7253 10.3876 13.7933C10.4468 13.87 10.491 13.9585 10.5795 14.1355Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></p>
                <p id="error"></p>
            </div>

            <div id="thankyou">
                <h2>Thank you for your feedback!</h2>
                <p>I truly appreciate your input and will use it to make improvements.</p>
            </div>
        </div>

    </div>

    <footer>
        <p>Copyright (c) 2024-2025 Rvo JP.</p>
    </footer>

    <script src="./script.js"></script>
</body>
</html>