<header class="d-flex align-items-center py-4 px-5 border-bottom position-fixed start-0 end-0 top-0 bg-white z-1">
    <div class="logo">
        <img src="/marketplace/assets/icon/logo.png" alt="">
    </div>
    <nav class="w-100 d-flex justify-content-center">
        <ul class="d-flex align-items-center mb-0">
            <li><a href="/my_project/" class="text-decoration-none text-black px-4">Home</a></li>
            <li><a href="/my_project/" class="text-decoration-none text-black px-4">Marketplace</a></li>
            <li><a href="/my_project/about" class="text-decoration-none text-black px-4">About Us</a></li>
            <li><a href="/my_project/contact"
                    class="text-decoration-none text-black px-4 position-relative z-3">Contacts</a></li>
        </ul>
    </nav>
    <div id="search" class="position-relative">
        <input type="text" placeholder="Search" class="search-input rounded-5 py-2 border-black">
        <button class="search-icon border-0 bg-white position-absolute">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.375 18.375L15.3126 15.3125M17.5 10.0625C17.5 14.1701 14.1701 17.5 10.0625 17.5C5.95488 17.5 2.625 14.1701 2.625 10.0625C2.625 5.95488 5.95488 2.625 10.0625 2.625C14.1701 2.625 17.5 5.95488 17.5 10.0625Z"
                    stroke="#37383E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <a href="cart" class="position-relative ms-4">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2.16675 2.16667H3.58176C3.84828 2.16667 3.98154 2.16667 4.08878 2.21568C4.18328 2.25887 4.26337 2.32833 4.31949 2.41578C4.38318 2.51501 4.40202 2.64693 4.43972 2.91077L4.95246 6.50001M4.95246 6.50001L6.09201 14.8757C6.23662 15.9386 6.30893 16.47 6.56302 16.87C6.78693 17.2225 7.10792 17.5028 7.48738 17.6772C7.91802 17.875 8.45435 17.875 9.52703 17.875H18.7981C19.8192 17.875 20.3297 17.875 20.747 17.6913C21.1148 17.5293 21.4304 17.2682 21.6584 16.9371C21.9169 16.5616 22.0125 16.0601 22.2035 15.057L23.6374 7.52884C23.7047 7.1758 23.7383 6.99928 23.6896 6.8613C23.6468 6.74026 23.5625 6.63833 23.4516 6.57369C23.3252 6.50001 23.1455 6.50001 22.7861 6.50001H4.95246ZM10.8334 22.75C10.8334 23.3483 10.3484 23.8333 9.75008 23.8333C9.15177 23.8333 8.66675 23.3483 8.66675 22.75C8.66675 22.1517 9.15177 21.6667 9.75008 21.6667C10.3484 21.6667 10.8334 22.1517 10.8334 22.75ZM19.5001 22.75C19.5001 23.3483 19.0151 23.8333 18.4167 23.8333C17.8184 23.8333 17.3334 23.3483 17.3334 22.75C17.3334 22.1517 17.8184 21.6667 18.4167 21.6667C19.0151 21.6667 19.5001 22.1517 19.5001 22.75Z"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="chart-total text-white position-absolute">
            <?php 
            if(isset($totalItemsInCart)){
                echo $totalItemsInCart;
            }else{
                echo 0;
            }
            ?>
        </span>
    </a>
    <?php 
   $is_login = isset($_SESSION['is_login']);

   if($is_login) {
    echo '<div class="ms-4">
        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.4999 18.75C11.4052 18.75 7.76384 20.6633 5.44555 23.6325C4.94659 24.2715 4.69711 24.591 4.70527 25.0229C4.71158 25.3565 4.92806 25.7774 5.19932 25.9834C5.55042 26.25 6.03697 26.25 7.01006 26.25H23.9897C24.9628 26.25 25.4494 26.25 25.8005 25.9834C26.0717 25.7774 26.2882 25.3565 26.2945 25.0229C26.3027 24.591 26.0532 24.2715 25.5542 23.6325C23.2359 20.6633 19.5946 18.75 15.4999 18.75Z"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M15.4999 15C18.71 15 21.3124 12.4816 21.3124 9.375C21.3124 6.2684 18.71 3.75 15.4999 3.75C12.2897 3.75 9.68739 6.2684 9.68739 9.375C9.68739 12.4816 12.2897 15 15.4999 15Z"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>';
   }else {
    echo '<a href="/my_project/login" class="btn btn-primary text-white ms-4">Login</a>';
   }
   ?>
</header>