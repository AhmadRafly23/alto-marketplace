<div class="col-md-8">
    <h2 class="fw-bold">Enter the requested data<br>to enter your cargo<br>account</h2>
</div>
<div class="col-md-4">
    <form action="login/save" method="post">
        <div class="d-flex flex-column mb-2">
            <label class="label-input-login mb-1" for="email">E-mail</label>
            <input class="input-login px-3 py-2 border rounded" type="email" id="email" name="email"
                placeholder="Enter your email" required>
            <span id="emailError" class="error mt-1"></span>
        </div>
        <div class="d-flex flex-column mb-5">
            <label class="label-input-login mb-1" for="password">Password</label>
            <input class="input-login px-3 py-2 border rounded" type="password" id="password" name="password"
                placeholder="Enter your password" required>
            <span id="passwordError" class="error mt-1"></span>
        </div>
        <button class="btn btn-login w-100 py-2 text-white" type="submit">Login</button>
        <div class="aggrement-login text-center mt-2">When you click "Submit" you agree to our <a
                class="text-decoration-none" href="#">Privacy
                Terms.</a></div>
    </form>
</div>
<img class="circle-1 position-absolute start-0" src="/marketplace/assets/content/circle-1.png" alt="">
<img class="circle-4 position-absolute bottom-0" src="/marketplace/assets/content/circle-4.png" alt="">
<script>
$(document).ready(function() {
    // Fungsi untuk menampilkan pesan error
    function showError(message) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message
        });
    }

    // Menampilkan pesan error jika ada dari query parameter
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    if (error) {
        showError(error);
    }

    // Validasi saat pengguna mengetik di input email
    $('#email').on('blur', function() {
        const email = $(this).val();
        if (!validateEmail(email)) {
            $('#emailError').text('Please enter a valid email address.');
        } else {
            $('#emailError').text('');
        }
    });

    // Validasi saat pengguna mengetik di input password
    $('#password').on('blur', function() {
        const password = $(this).val();
        if (password.length < 6) {
            $('#passwordError').text('Password must be at least 6 characters long.');
        } else {
            $('#passwordError').text('');
        }
    });

    // Validasi saat form disubmit
    $('#loginForm').on('submit', function(event) {
        const email = $('#email').val();
        const password = $('#password').val();
        let valid = true;

        if (!validateEmail(email)) {
            $('#emailError').text('Please enter a valid email address.');
            valid = false;
        }

        if (password.length < 6) {
            $('#passwordError').text('Password must be at least 6 characters long.');
            valid = false;
        }

        // Jika tidak valid, hentikan submit form
        if (!valid) {
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});
</script>