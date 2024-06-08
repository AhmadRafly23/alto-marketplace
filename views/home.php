<section class="hero-section d-flex flex-column align-items-center py-5">
    <h2 class="display-5 fw-bold">That neither Distance nor time<br>separate you from your people.</h2>
    <h3 class="mb-4">You can now buy your 100% Honduran products with us and we will send them to the door<br>of
        your house anywhere
        in
        the United States.</h3>
    <button class="d-flex align-items-center ps-4 pe-2 py-2 rounded-5 border-0">
        <span class="text-white me-5">Explore Marketplace</span>
        <div class="p-2 rounded-circle bg-white">
            <svg width="26" height="26" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.75 2.75H4.54598C4.88425 2.75 5.05339 2.75 5.1895 2.81221C5.30945 2.86702 5.4111 2.95518 5.48233 3.06617C5.56316 3.19212 5.58708 3.35956 5.63492 3.69444L6.28571 8.25M6.28571 8.25L7.73206 18.8807C7.91561 20.2297 8.00738 20.9042 8.32989 21.412C8.61407 21.8594 9.02149 22.2151 9.50311 22.4364C10.0497 22.6875 10.7304 22.6875 12.0919 22.6875H23.859C25.155 22.6875 25.803 22.6875 26.3326 22.4543C26.7995 22.2487 27.2 21.9173 27.4894 21.4971C27.8175 21.0205 27.9388 20.3839 28.1813 19.1108L30.0013 9.55582C30.0866 9.10774 30.1293 8.88369 30.0674 8.70856C30.0132 8.55493 29.9061 8.42557 29.7654 8.34352C29.6049 8.25 29.3768 8.25 28.9207 8.25H6.28571ZM13.75 28.875C13.75 29.6344 13.1344 30.25 12.375 30.25C11.6156 30.25 11 29.6344 11 28.875C11 28.1156 11.6156 27.5 12.375 27.5C13.1344 27.5 13.75 28.1156 13.75 28.875ZM24.75 28.875C24.75 29.6344 24.1344 30.25 23.375 30.25C22.6156 30.25 22 29.6344 22 28.875C22 28.1156 22.6156 27.5 23.375 27.5C24.1344 27.5 24.75 28.1156 24.75 28.875Z"
                    stroke="#ECC444" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </button>
</section>
<section class="popular-section container mb-5">
    <div class="d-flex justify-content-between mb-4">
        <h2 class="text-center display-5 fw-bold">Popular Products</h2>
        <div class="d-flex align-items-center gap-5">
            <div class="d-flex gap-3">
                <button class="btn-category-active px-3 py-1 rounded-5">
                    All
                </button>
                <button class="px-3 py-1 rounded-5 bg-white">
                    Popular
                </button>
                <button class="px-3 py-1 rounded-5 bg-white">
                    Frozen
                </button>
                <button class="px-3 py-1 rounded-5 bg-white">
                    Crunchy
                </button>
            </div>
            <div>
                <button id="prev" class="btn-arrow rounded-circle p-1 bg-white me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 12L4 12M4 12L10 18M4 12L10 6" stroke="#EDC74C" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="next" class="btn-arrow rounded-circle p-1 bg-white">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="#EDC74C" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($products as $index => $product) { ?>
        <div class="product col-12 col-md-3 <?php echo $index < 4 ? 'active' : ''; ?>"
            data-index="<?php echo $index; ?>" data-id="<?= $product['id'] ?>">
            <div class="card border-0 px-3 pt-3 rounded-3 shadow text-decoration-none text-black ">
                <img src="<?= $product['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body px-0">
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <p class="card-text mb-2"><?= $product['description'] ?></p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="fw-bolder">
                            $ <?= $product['price'] ?>
                        </span>
                        <div class="d-flex align-items-center gap-2">
                            <button class="decrement rounded-circle d-flex align-items-center bg-white">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 12h14" />
                                </svg>
                            </button>
                            <span class="quantity">1</span>
                            <button class="increment rounded-circle d-flex align-items-center bg-white">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 12h14m-7 7V5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn-more rounded-2 bg-white">More details</button>
                        <button class="add-to-cart btn-checkout py-1 px-2 bg-black border-0 rounded-2">
                            <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.75 2.75H4.54598C4.88425 2.75 5.05339 2.75 5.1895 2.81221C5.30945 2.86702 5.4111 2.95518 5.48233 3.06617C5.56316 3.19212 5.58708 3.35956 5.63492 3.69444L6.28571 8.25M6.28571 8.25L7.73206 18.8807C7.91561 20.2297 8.00738 20.9042 8.32989 21.412C8.61407 21.8594 9.02149 22.2151 9.50311 22.4364C10.0497 22.6875 10.7304 22.6875 12.0919 22.6875H23.859C25.155 22.6875 25.803 22.6875 26.3326 22.4543C26.7995 22.2487 27.2 21.9173 27.4894 21.4971C27.8175 21.0205 27.9388 20.3839 28.1813 19.1108L30.0013 9.55582C30.0866 9.10774 30.1293 8.88369 30.0674 8.70856C30.0132 8.55493 29.9061 8.42557 29.7654 8.34352C29.6049 8.25 29.3768 8.25 28.9207 8.25H6.28571ZM13.75 28.875C13.75 29.6344 13.1344 30.25 12.375 30.25C11.6156 30.25 11 29.6344 11 28.875C11 28.1156 11.6156 27.5 12.375 27.5C13.1344 27.5 13.75 28.1156 13.75 28.875ZM24.75 28.875C24.75 29.6344 24.1344 30.25 23.375 30.25C22.6156 30.25 22 29.6344 22 28.875C22 28.1156 22.6156 27.5 23.375 27.5C24.1344 27.5 24.75 28.1156 24.75 28.875Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<section class="description-section container mb-4">
    <div class="row justify-content-between align-items-center py-5">
        <div class="col-md-6">
            <div class="alto-title mb-4">
                <h2 class="mb-0">What is</h2>
                <h2 class="d-flex justify-content-end"> AltoCargo?</h2>
            </div>
            <p class="alto-description">We are a Honduran company that aims to make Honduran products available to our
                compatriots in the United
                States. You buy them, we pack them and send them to your doorstep. to anywhere in the United States.</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="shadow p-5 rounded-circle position-relative">
                <img src="/marketplace/assets/content/logo-blanco2.png" alt="">
                <img class="circle-1 position-absolute top-0" src="/marketplace/assets/content/circle-1.png" alt="">
                <img class="circle-2 position-absolute bottom-0" src="/marketplace/assets/content/circle-2.png" alt="">
                <img class="circle-3 position-absolute" src="/marketplace/assets/content/circle-3.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="type-section container mb-5">
    <div class="row justify-content-between">
        <div class="card-type col-3 d-flex flex-column justify-content-between py-4 px-4 shadow">
            <div class="d-flex justify-content-between">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.43767 28.5833H8.08333C11.8573 28.5833 14.9167 31.6427 14.9167 35.4167V38.8333C14.9167 42.6073 17.9761 45.6667 21.75 45.6667C25.5239 45.6667 28.5833 48.7261 28.5833 52.5V62.5623M18.3333 4.44636V9.79167C18.3333 14.5091 22.1576 18.3333 26.875 18.3333H28.5833C32.3573 18.3333 35.4167 21.3927 35.4167 25.1667C35.4167 28.9406 38.4761 32 42.25 32C46.0239 32 49.0833 28.9406 49.0833 25.1667C49.0833 21.3927 52.1427 18.3333 55.9167 18.3333L59.5536 18.3333M42.25 61.0003V52.5C42.25 48.7261 45.3094 45.6667 49.0833 45.6667H59.5536M62.75 32C62.75 48.9828 48.9828 62.75 32 62.75C15.0172 62.75 1.25 48.9828 1.25 32C1.25 15.0172 15.0172 1.25 32 1.25C48.9828 1.25 62.75 15.0172 62.75 32Z"
                        stroke="#F7BE2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg width="9" height="43" viewBox="0 0 9 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4.22406" cy="37.9429" r="4.21502" transform="rotate(90.1082 4.22406 37.9429)"
                        fill="#231F20" />
                    <circle cx="4.25531" cy="21.0832" r="4.21502" transform="rotate(90.1082 4.25531 21.0832)"
                        fill="#231F20" />
                    <circle cx="4.2868" cy="4.22292" r="4.21502" transform="rotate(90.1082 4.2868 4.22292)"
                        fill="#231F20" />
                </svg>
            </div>
            <div>
                <h4 class="fw-bolder">Globalization</h4>
                <p class="fw-light">With charge you can order from the comfort of your home</p>
            </div>
        </div>
        <div class="card-type col-3 d-flex flex-column justify-content-between py-4 px-4 shadow">
            <div class="d-flex justify-content-between">
                <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M46 8.625H60.375M60.375 8.625V23M60.375 8.625L43.125 25.875M14.375 8.625C11.1994 8.625 8.625 11.1994 8.625 14.375V17.25C8.625 41.0673 27.9327 60.375 51.75 60.375H54.625C57.8006 60.375 60.375 57.8006 60.375 54.625V45.1972C60.375 43.9597 59.5831 42.861 58.4092 42.4697L45.4905 38.1635C44.1332 37.7111 42.6497 38.3255 42.0099 39.6052L38.7651 46.0949C31.7365 42.9259 26.0741 37.2635 22.9051 30.2349L29.3948 26.9901C30.6745 26.3503 31.2889 24.8668 30.8365 23.5095L26.5303 10.5908C26.139 9.41686 25.0403 8.625 23.8028 8.625H14.375Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg width="9" height="43" viewBox="0 0 9 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4.22406" cy="37.9429" r="4.21502" transform="rotate(90.1082 4.22406 37.9429)"
                        fill="#231F20" />
                    <circle cx="4.25531" cy="21.0832" r="4.21502" transform="rotate(90.1082 4.25531 21.0832)"
                        fill="#231F20" />
                    <circle cx="4.2868" cy="4.22292" r="4.21502" transform="rotate(90.1082 4.2868 4.22292)"
                        fill="#231F20" />
                </svg>
            </div>
            <div>
                <h4 class="fw-bolder text-white">Responsibility</h4>
                <p class="fw-light text-white">We are leaders in communication, if you have any questions</p>
            </div>
        </div>
        <div class="card-type col-3 d-flex flex-column justify-content-between py-4 px-4 shadow">
            <div class="d-flex justify-content-between">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.43767 28.5833H8.08333C11.8573 28.5833 14.9167 31.6427 14.9167 35.4167V38.8333C14.9167 42.6073 17.9761 45.6667 21.75 45.6667C25.5239 45.6667 28.5833 48.7261 28.5833 52.5V62.5623M18.3333 4.44636V9.79167C18.3333 14.5091 22.1576 18.3333 26.875 18.3333H28.5833C32.3573 18.3333 35.4167 21.3927 35.4167 25.1667C35.4167 28.9406 38.4761 32 42.25 32C46.0239 32 49.0833 28.9406 49.0833 25.1667C49.0833 21.3927 52.1427 18.3333 55.9167 18.3333L59.5536 18.3333M42.25 61.0003V52.5C42.25 48.7261 45.3094 45.6667 49.0833 45.6667H59.5536M62.75 32C62.75 48.9828 48.9828 62.75 32 62.75C15.0172 62.75 1.25 48.9828 1.25 32C1.25 15.0172 15.0172 1.25 32 1.25C48.9828 1.25 62.75 15.0172 62.75 32Z"
                        stroke="#F7BE2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg width="9" height="43" viewBox="0 0 9 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4.22406" cy="37.9429" r="4.21502" transform="rotate(90.1082 4.22406 37.9429)"
                        fill="#231F20" />
                    <circle cx="4.25531" cy="21.0832" r="4.21502" transform="rotate(90.1082 4.25531 21.0832)"
                        fill="#231F20" />
                    <circle cx="4.2868" cy="4.22292" r="4.21502" transform="rotate(90.1082 4.2868 4.22292)"
                        fill="#231F20" />
                </svg>
            </div>
            <div>
                <h4 class="fw-bolder">Trust</h4>
                <p class="fw-light">Have confidence in our products 100% Hondureños</p>
            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function() {
    let totalProducts = $('.product').length;
    let visibleProducts = 4;
    let currentIndex = 0;

    function updateVisibility() {
        $('.product').removeClass('active');
        for (let i = 0; i < visibleProducts; i++) {
            let index = currentIndex + i;
            if (index < totalProducts) {
                $('.product').eq(index).addClass('active');
            }
        }
        updateButtons();
    }

    function updateButtons() {
        $('#prev').prop('disabled', currentIndex === 0);
        $('#next').prop('disabled', currentIndex + visibleProducts >= totalProducts);
    }

    $('#next').click(function() {
        if (currentIndex + visibleProducts < totalProducts) {
            currentIndex++;
            updateVisibility();
        }
    });

    $('#prev').click(function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateVisibility();
        }
    });

    updateVisibility();

    // Quantity update logic
    $('.increment').click(function() {
        var quantityElement = $(this).siblings('.quantity');
        var quantity = parseInt(quantityElement.text(), 10);
        quantityElement.text(quantity + 1);
    });

    $('.decrement').click(function() {
        var quantityElement = $(this).siblings('.quantity');
        var quantity = parseInt(quantityElement.text(), 10);
        if (quantity > 0) {
            quantityElement.text(quantity - 1);
        }
    });

    // Add to cart logic
    $('.add-to-cart').click(function() {
        var productElement = $(this).closest('.product');
        var productId = productElement.data('id');
        var quantity = parseInt(productElement.find('.quantity').text(), 10);

        if (quantity > 0) {
            $.ajax({
                url: '/marketplace/cart/add',
                type: 'POST',
                data: {
                    product_id: productId,
                    quantity: quantity
                },
                success: function(response) {
                    var result = JSON.parse(response);
                    if (result.success) {
                        Swal.fire(
                            'Success',
                            result.message,
                            'success'
                        );
                    } else {
                        Swal.fire(
                            'Error',
                            result.message,
                            'error'
                        );
                    }
                }
            });
        } else {
            Swal.fire(
                'Error',
                'Please select a quantity greater than 0',
                'error'
            );
        }
    });
});
</script>