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
    <meta charset="UTF-8">
    <title><?php echo L::domain . " - " . L::appTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css" type="text/css">
    <script src="external/jquery/jquery-3.4.1.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="external/fontawesome5/all.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron text-center mt-5">
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
                        <a href="https://klaus.webzeug.net" target="_blank" title="Mehr über mich erfahren">
                            <img src="assets/images/klaus.png" class="card-img-top" alt="Bild von mir (Klaus)" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo L::startpage_cards_klaus_header; ?></h5>
                            <p class="card-text"><?php echo L::startpage_cards_klaus_text; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="https://klaus.webzeug.net" target="_blank">https://klaus.webzeug.net</a>
                            </small>
                        </div>
                    </div>
                    <!-- Rechnen -->
                    <div class="card">
                        <a href="https://rechnen.webzeug.net" target="_blank" title="Mathe Arbeitsblätter erstellen">
                            <img src="assets/images/rechnen.png" class="card-img-top" alt="Screenshot von Math Arbeitsblatt" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo L::startpage_cards_rechnen_header; ?></h5>
                            <p class="card-text"><?php echo L::startpage_cards_rechnen_text; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <a href="https://rechnen.webzeug.net" target="_blank">https://rechnen.webzeug.net</a>
                            </small>
                        </div>
                    </div>
                    <!-- Blog -->
                    <div class="card">
                        COMING SOON
                    </div>
                    <!-- MyDailyLog -->
                    <div class="card">
                        COMING SOON
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('./assets/partials/imprint.php'); ?>
    </div>
</body>
</html>