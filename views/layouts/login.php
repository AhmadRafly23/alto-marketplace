<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'My Project'; ?></title>
    <link rel="stylesheet" href="vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/marketplace/assets/css/style.css" />
    <link rel="stylesheet" href="/marketplace/assets/css/login.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="d-flex flex-column vh-100">
        <?php require_once 'views/partials/header.php'; ?>
        <div class="main-login container d-flex align-items-center position-relative">
            <?php require_once $content; ?>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        function adjustMainHeight() {
            let headerHeight = $('header').outerHeight();
            $('').css('margin-top', headerHeight);
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
</body>

</html>