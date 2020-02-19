<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>LogHappens</title>

    <!-- Favicons-->
    <link rel="icon" href="<?= buildAssetUrl("img/favicon/favicon-32x32.png") ?>" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="<?= buildAssetUrl("img/favicon/apple-touch-icon-152x152.png") ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4/dist/litera/bootstrap.min.css">
    <link rel="stylesheet" href="<?= buildAssetUrl("css/layout.css") ?>">

    <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@1/dist/iconify.min.js"></script>
</head>
<body>
    <header id="header" class="page-topbar">
        <?php include('templates/elements/header.php') ?>
    </header>

    <main class="container-fluid">
        <div class="row">
            <aside id="left-sidebar-nav" class="col-12 col-md-12 col-lg-3 pt-4">
                <?php include('templates/elements/sidemenu.php') ?>
            </aside>

            <section id="content" class="col-12 col-md-12 col-lg-9">
                <div class="row mt-4">
                    <div class="col-12 log-container">
                        <?php foreach ($views as $view) { ?>
                            <?php include($view); ?>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include('templates/elements/confirm_truncate.php') ?>
    <div class="baseUrl d-none"><?= BASE_URL ?></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net@1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/push.js@1/bin/push.min.js"></script>
    <script type="text/javascript" src="<?= buildAssetUrl("js/custom.js") ?>"></script>
</body>
</html>
