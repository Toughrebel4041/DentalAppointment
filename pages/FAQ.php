<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <title>Treatment SSR Clinic</title>
    <style>
        .pencet {
            margin: 3px;
            width: 50rem;
        }
    </style>
</head>

<body>
    <header>
        <?php

        ?>
    </header>
    <div class="text-center faq-section my-5" aria-labelledby="navbarDropdown">
        <div class="faq-title mb-3 "><h2>FAQ</h2></div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dimana saja lokasi SSR Dental Clinic?
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jl. TB Simatupang, RT.3/RW.3, Cilandak Tim., Ps. Minggu, Kota Jakarta
                        Selatan,
                        Daerah Khusus Ibukota Jakarta 12560</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Jam Operasional SSR Dental Clinic ada di jam berapa?
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jawabannya disini</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Apa SSR Dental Clinic menerima pasien anak?
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jawabannya disini</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Apa SSR Dental Clinic menerima pasien kontrol behel pindahan?
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jawabannya disini</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Adakah fasilitas Rontgen di SSR Dental Clinic
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jawabannya disini</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Apakah pasien dapat datang langsung tanpa reservasi?
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jawabannya disini</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="pencet btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Di SSR Dental Clinic bisa menggunakan pembayaran apa saja?
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item">Jawabannya disini</a></li>
            </ul>
        </div>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
                const answer = item.nextElementSibling;
                if (answer.style.display === "block") {
                    answer.style.display = "none";
                } else {
                    answer.style.display = "block";
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>