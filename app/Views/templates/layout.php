<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0">

    <?php
    helper('html');
    echo link_tag('assets/css/style.css');
    ?>

    <title><?= $this->renderSection('title') ?></title>

</head>

<body class="bg-light">
    <main role="main" class="d-flex flex-column h-100">
        <div id="header">
            <div class="container-fluid text-light bg-primary pt-3 pb-1">
                <div class="row align-items-center">
                    <div class="col-auto me-auto">
                        <img src="/assets/img/logos/mpr_logo_neg.png" alt="mpr Logo" height="50px">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid flex-grow-1">
            <div class="row py-3">
                <div class="col-3" id="sidebar">
                    <nav class="">
                        <div class="list-group mb-3">
                            <a class="list-group-item list-group-item-action <?= uri_string() ==
                                                                                    '/'
                                                                                    ? 'active'
                                                                                    : '' ?>" aria-current="page" href="/">Home</a>
                        </div>
                        <div class="list-group mb-3">
                            <a class="list-group-item list-group-item-action <?= uri_string() ==
                                                                                    'address'
                                                                                    ? 'active'
                                                                                    : '' ?>" href="/address">Adressen</a>
                            <a class="list-group-item list-group-item-action <?= uri_string() ==
                                                                                    'address/create'
                                                                                    ? 'active'
                                                                                    : '' ?>" href="/address/create">Adresse anlegen</a>
                        </div>
                        <div class="list-group mb-3">
                            <a href="/logout" class="list-group-item list-group-item-action">Abmelden</a>
                        </div>
                    </nav>
                </div>
                <div class="col-9">
                    <div class="container">
                        <?= $this->renderSection('main') ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container-fluid bg-secondary py-3 pb-5">
                <p class="text-center text-light">
                    &copy; <?= date(
                                'Y'
                            ) ?> &#x2027; mpr werbefactory gmbh &#x2027; Heinrich-Otto-Str. 1 &#x2027; 73262 Reichenbach
                </p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>