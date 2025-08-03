<?php
$lang_list = ['en-US', 'ja'];
$lang = isset($_GET['lang']) ? $_GET['lang'] : explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];
if (!in_array($lang, $lang_list, true)) $lang = 'en-US';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Bar | Rvo Works</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div id="inner">
            <a href="/"><h2 id="logo"> Rvo Works</h2></a> 
            <div id="nav">
                <p>Contact</p>
                <p>Addons</p>
                <a href="https://discordapp.com/users/642606556151545857"></a>
                <a href="http://github.com/rvo-jp/"></a>
            </div>
        </div>
    </header>

    <div id="top">
        <div id="top_text">
            <p id="name">Health Bar</p>
            <p id="sub">A simple health indicator</p>
            <div id="dl">
                <a href="./download/download.php" download><p id="download"><?= ['en-US'=>'DOWNLOAD', 'ja'=>'ダウンロード'][$lang] ?></p></a>
                <p id="counter"><?= number_format((int)file_get_contents('download/count.txt')) ?> downloads</p>
            </div>
        </div>
    </div>

    <div id="menu">
        <div id="mn">
            <a href="./#preview"><p>Preview</p></a>
            <a href="./#changelog"><p>News</p></a>
            <a href="./#features"><p>Features</p></a>
            <a href="./#faq"><p>FAQ & Feedback</p></a>
        </div>
    </div>

    <div id="preview">
        <h1>Preview</h1>
        <iframe src="https://www.youtube.com/embed/0qYaEBuM-7E?si=IDqwGRkvqHP3hDrR&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div id="changelog">
        <div id="news">
            <h1>News</h1>
            <h3>Health Bar is continuously being optimized and refined with minor bug fixes to support the latest version!</h3>
        </div>
        <div id="latest">
            <div id="newimg"></div>
            <div class="des">
                <p class="type">UPDATE & BUGFIX</p>
                <h2>Version 3.4.0 — July 27 2025</h2>
                <p>This update adds support for the newly introduced mob, the "Happy Ghast," from Minecraft v1.21.90. It also fixes a bug that caused Creepers to always appear charged with lightning, and resolves an issue where Ghasts were displayed at an abnormally large size.</p>
                <a href="http://github.com/rvo-jp/health-bar/">Learn more on GitHub</a>
            </div>
        </div>

        <div id="donation">
            <div class="des">
                <h2>Support the Project</h2>
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
                <p id="send">Send </p>
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