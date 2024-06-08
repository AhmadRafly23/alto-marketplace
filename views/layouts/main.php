<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'My Project'; ?></title>
    <link rel="stylesheet" href="vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/marketplace/assets/css/style.css" />
    <link rel="stylesheet" href="/marketplace/assets/css/home.css" />
    <link rel="stylesheet" href="/marketplace/assets/css/cart.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="vh-100 d-flex flex-column">
        <?php require_once 'views/partials/header.php'; ?>
        <main style="flex-grow: 1;">
            <?php require_once $content; ?>
        </main>
        <?php require_once 'views/partials/footer.php'; ?>
        <script>
        $(document).ready(function() {
            function adjustMainHeight() {
                let headerHeight = $('header').outerHeight();
                $('main').css('margin-top', headerHeight);
            }

            // Adjust height on document ready
            adjustMainHeight();

            // Adjust height on window resize
            $(window).resize(function() {
                adjustMainHeight();
            });
        });
        </script>
        <script src="vendor/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>