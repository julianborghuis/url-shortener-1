<!--
    /*
     * Copyright (c) 2019 - 2020 Julian van Schijndel
     * https://juliandev.nl ~ <info@juliandev.nl>
     * https://github.com/Julianvschijndel
     * --------------------------------------------------
     * Url shortener.
     * --------------------------------------------
     * A PHP script to short up URL.
    */
-->
<?php require_once 'system/class.url.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Url shortener ~ Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Url shortener script.">
    <meta name="author" content="Julian van Schijndel">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@bybas/latte-ui/dist/latte-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
</head>
<body>
<main id="emc">
    <div class="app-bar app-bar-primary">
        <div class="app-bar-row">
            <a href="/" class="no__link app-bar-title">Url shortener</a>
        </div>
    </div>

    <div class="content container">
        <div class="row">
            <div class="col-12 col-lg-8 order-lg-0">
                <div class="panel">
                    <div class="panel-header">
                        <span class="panel-title">
                            Url shortener
                        </span>
                    </div>
                    <?php (new url)->postURL(); ?>
                    <div class="panel-body">
                        <form method="post">
                            <label for="url"><strong>Enter URL here</strong></label>
                            <div class="form-group">
                                <input type="text" name="url" id="url" class="form-control">
                            </div>
                            <br>
                            <button type="submit" name="submit-url" class="btn btn-contained btn-success">
                                <i class="mdi mdi-web"></i> <span>Short up my url</span>
                            </button>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-12 col-lg-4 order-lg-1">
                <div class="panel">
                    <div class="panel-header">
                        <span class="panel-title">
                            Sponsor me for more
                        </span>
                    </div>
                    <div class="list pt-15">
                        <a href="https://www.buymeacoffee.com/JulianDev" target="_blank" class="list-item text-decoration-none is-ripple">
                            <div class="ripple-container"></div>
                            <img class="list-item-prefix coffee-button" src="https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg" alt="Buymeacoffee">
                            <div class="list-item-caption"><strong>Buy me a coffee</strong></div>
                        </a>
                        <a href="https://www.paypal.me/juliandevnl" target="_blank" class="list-item text-decoration-none is-ripple">
                            <div class="ripple-container"></div>
                            <img class="list-item-prefix" src="https://juliandev.nl/img/pp.svg" alt="PayPal">
                            <div class="list-item-caption"><strong>PayPal</strong></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
</body>
<script nomodule src="/assets/app.js"></script>
</html>
