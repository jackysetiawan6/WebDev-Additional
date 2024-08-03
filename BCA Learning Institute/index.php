<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA Learning Institute</title>
    <link rel="shortcut icon" href="assets/favicon-bca.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.3/font/bootstrap-icons.css">
    <style>
        .primary {
            color: #0060af;
        }

        footer {
            background-color: #031120;
        }

        #subscribe::placeholder {
            color: #6f6f6f;
        }

        .room #room-name {
            top: 100%;
            transition: top 0.3s ease-in-out;
        }

        .room:hover #room-name {
            top: 0;
        }
    </style>
</head>

<body>
    <header class="d-flex px-5 py-3 position-sticky top-0 w-100 bg-white shadow z-3" style="height: 85px;">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <img src="assets/logo-bca-logo-only.png" alt="BCA Learning Institute" style="width: 75px;">
            <span class="primary fs-4 fw-bold" style="margin-top: -4px;">Learning Institute</span>
        </a>
        <ul class="nav gap-3 align-items-center">
            <li class="nav-item"><a href="booking.php" class="nav-link primary fw-semibold">Bookings</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link primary fw-semibold">About</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link primary fw-semibold">Login</a></li>
        </ul>
    </header>
    <div class="banner z-n1" style="position: relative; height: 450px; width: 100%; overflow: hidden;">
        <img src="assets/banner-bca.jpg" class="img w-100 h-100 object-fit-cover" alt="BCA Learning Institute">
    </div>
    <div class="container">
        <div class="search-header bg-white mx-5 px-4 py-3 shadow rounded-3" style="margin-top: -45px;">
            <form action="search.php" method="GET" class="search w-100" style="display: grid; gap: 1rem; grid-template-columns: 1fr 1fr 1fr 60px;">
                <div>
                    <label for="location" class="fw-semibold">Location</label>
                    <select name="location" id="location" class="form-control border-1 shadow-none px-0 border-start-0 border-end-0 border-top-0 rounded-0">
                        <option class="text-muted" value="" selected disabled>Select Room</option>
                        <?php
                        for ($i = 1; $i <= 20; $i++) {
                            $number = $i % 2 == 1 ? ($i + 1) * 50 : $i * 50 + 1;
                            echo "<option value='Discussion $number'>Discussion $number</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="date" class="fw-semibold">Date</label>
                    <input type="date" name="date" id="date" class="form-control border-1 shadow-none px-0 border-start-0 border-end-0 border-top-0 rounded-0">
                </div>
                <div>
                    <label for="time" class="fw-semibold">Time</label>
                    <input type="time" name="time" id="time" class="form-control border-1 shadow-none px-0 border-start-0 border-end-0 border-top-0 rounded-0">
                </div>
                <button type="submit" class="btn btn-primary rounded-circle border-0" style="width: 60px; height: 60px; align-self: center; background-color: #0060af;">
                    <i class="bi bi-chevron-right fs-3"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="container-flex">
        <div class="m-5 d-grid" style="grid-template-columns: repeat(auto-fill, minmax(500px, 1fr)); gap: 2rem;">
            <?php
            for ($i = 1; $i <= 20; $i++) {
                $number = $i % 2 == 1 ? ($i + 1) * 50 : $i * 50 + 1;
                echo "<div class='room shadow rounded-3 overflow-hidden w-100 h-100 position-relative'>";
                echo "<a href='detail.php' class='text-decoration-none text-white bg-black d-flex justify-content-center align-items-center w-100 h-100 fs-5 mb-0 fw-bold position-absolute opacity-50' id='room-name'>Discussion $number</a>";
                echo "<img src='assets/room-bca.jpg' class='img w-100 h-100 object-fit-cover' alt='Room'>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <footer class="p-5 pb-4">
        <a href="index.php" class="d-flex align-items-center mb-5 text-decoration-none" style="width: fit-content;">
            <img src="assets/logo-bca-logo-only-light.svg" alt="BCA Learning Institute" style="width: 70px;">
            <span class="text-white fs-4 fw-bold ms-1" style="margin-top: -4px;">Learning Institute</span>
        </a>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
            <div class="d-grid text-white" style="grid-template-columns: repeat(3, auto); row-gap: 1rem; column-gap: 5rem;">
                <p class="fw-bold">Kantor Pusat</p>
                <p class="fw-bold">Hubungi Kami</p>
                <p class="fw-bold">Media Sosial</p>
                <p>Menara BCA, Grand Indonesia</p>
                <p>
                    <i class="bi bi-telephone-fill me-2"></i>
                    Halo BCA 1500888
                </p>
                <p>
                    <i class="bi bi-facebook me-2"></i>
                    GoodLife BCA
                </p>
                <p>Jl. MH Thamrin No. 1 Jakarta Pusat 10310</p>
                <p>
                    <i class="bi bi-envelope-fill me-2"></i>
                    halobca@bca.co.id
                </p>
                <p>
                    <i class="bi bi-instagram me-2"></i>
                    @goodlifebca
                </p>
                <p><a class="text-white" href="https://www.bca.co.id/lokasi-bca">Lokasi BCA Lainnya</a></p>
                <p>
                    <i class="bi bi-whatsapp me-2"></i>
                    +62 811 1500 998
                </p>
                <p><a class="text-white" href="https://www.bca.co.id/id/tentang-bca/media-riset/Social-Media">Lihat Semua Media Sosial</a></p>
            </div>
            <div class="text-white d-flex flex-column gap-3 mt-5">
                <p class="m-0">Dapatkan promo dan penawaran terbaik dari BCA</p>
                <form action="index.php" method="POST" class="d-flex gap-2 align-items-center">
                    <input type="text" name="subscribe" id="subscribe" class="form-control border-1 shadow-none px-0 border-start-0 border-end-0 border-top-0 rounded-0 bg-transparent text-white" placeholder="Enter your email">
                    <button class="btn text-white p-0 fs-4"><i class="bi bi-arrow-right"></i></button>
                </form>
                <p>This site is protected by reCAPTCHA and the Google<br><a class="text-white" href="https://policies.google.com/privacy">Privacy Policy</a> and <a class="text-white" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
            </div>
        </div>
        <hr class="text-white mt-5">
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-3 text-white flex-wrap">
                <p>BCA berizin dan diawasi oleh Otoritas Jasa Keuangan & Bank Indonesia</p>
                <p>BCA merupakan peserta penjaminan LPS</p>
            </div>
            <div class="footer-addons d-flex text-white gap-3 flex-wrap">
                <a class="text-white" href="https://www.bca.co.id/id/informasi/Suku-Bunga-Dasar-Kredit">SBDK</a>
                <a class="text-white" href="https://www.bca.co.id/id/Syarat-dan-Ketentuan">Kebijakan</a>
                <a class="text-white" href="https://www.bca.co.id/id/informasi/Kebijakan">Syarat dan Ketentuan</a>
            </div>
        </div>
    </footer>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>