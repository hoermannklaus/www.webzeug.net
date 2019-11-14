<?php
require __DIR__ . '/vendor/autoload.php';

$i18n = new i18n('lang/lang_{LANGUAGE}.json', 'langcache/', 'de');
$i18n->init();

$version = WwwWebzeugNet\ApplicationVersion::get();
$language = $i18n->getAppliedLang();
?>

<!DOCTYPE html>
<html>
<head>
    <?php require_once('./includes/gtmHead.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <!-- Meta information -->
    <title><?php echo L::appTitle . " - " . L::domain; ?></title>
    <meta name="description" content="<?php echo L::description; ?>">
	<meta name="author" content="Klaus Hörmann-Engl<klaus@webzeug.net>">

    <!-- Header includes -->
    <?php require_once('./includes/headerIncludes.php'); ?>
</head>
<body>
    <?php require_once('./includes/gtmBody.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron text-center mt-5 bg-secondary text-white">
                    <h1>
                        <?php echo L::startpage_header; ?>
                    </h1>
                    <p>
                        <?php echo L::startpage_introtext; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <div class="card-deck">
                    <!-- Klaus -->
                    <div class="card">
                        <a href="https://klaus.webzeug.net" class="klaus-link" target="_blank" title="<?php echo L::startpage_cards_klaus_title; ?>">
                            <img src="assets/images/klaus.png" class="card-img-top" alt="Bild von mir (Klaus)" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo L::startpage_cards_klaus_header; ?></h5>
                            <p class="card-text"><?php echo L::startpage_cards_klaus_text; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="https://klaus.webzeug.net" target="_blank" class="klaus-link" title="<?php echo L::startpage_cards_klaus_title; ?>">https://klaus.webzeug.net</a>
                            </small>
                        </div>
                    </div>
                    <!-- Rechnen -->
                    <div class="card">
                        <a href="https://rechnen.webzeug.net" target="_blank" class="rechnen-link bg-secondary" title="<?php echo L::startpage_cards_rechnen_title; ?>">
                            <img src="assets/images/rechnen.png" class="card-img-top" alt="Screenshot von Math Arbeitsblatt" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo L::startpage_cards_rechnen_header; ?></h5>
                            <p class="card-text"><?php echo L::startpage_cards_rechnen_text; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="https://rechnen.webzeug.net" target="_blank" class="rechnen-link" title="<?php echo L::startpage_cards_rechnen_title; ?>">https://rechnen.webzeug.net</a>
                            </small>
                        </div>
                    </div>
                    <!-- Piviz -->
                    <div class="card">
                        <a href="https://piviz.webzeug.net" target="_blank" class="piviz-link" title="<?php echo L::startpage_cards_piviz_title; ?>">
                            <img src="assets/images/piviz.png" class="card-img-top" alt="Farbige Punkte" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo L::startpage_cards_piviz_header; ?></h5>
                            <p class="card-text"><?php echo L::startpage_cards_piviz_text; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="https://piviz.webzeug.net" target="_blank" class="piviz-link" title="<?php echo L::startpage_cards_piviz_title; ?>">https://piviz.webzeug.net</a>
                            </small>
                        </div>
                    </div>
                    <!-- Youtube -->
                    <div class="card">
                        <a href="https://www.youtube.com/channel/UCFgFHKwM1xvTp7vLoz91d1g" target="_blank" class="youtube-link bg-secondary" title="<?php echo L::startpage_cards_youtube_title; ?>">
                            <img src="assets/images/youtube.png" class="card-img-top" alt="Farbige Punkte" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo L::startpage_cards_youtube_header; ?></h5>
                            <p class="card-text"><?php echo L::startpage_cards_youtube_text; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="https://www.youtube.com/channel/UCFgFHKwM1xvTp7vLoz91d1g" target="_blank" class="youtube-link" title="<?php echo L::startpage_cards_youtube_title; ?>">https://www.youtube.com/</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('./includes/imprint.php'); ?>
    </div>
</body>
</html>