<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takapedia Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #1a1a1a;
            color: #fff;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #2d2d2d;
        }

        .header .logo {
            display: flex;
            align-items: center;
        }

        .header img {
            height: 40px;
        }

        .header nav {
            display: flex;
            gap: 20px;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .banner {
            background: url('banner-placeholder.jpg') no-repeat center center/cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .banner .content {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .banner h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .banner p {
            font-size: 16px;
        }

        .grid-section {
            padding: 20px;
        }

        .grid-section h2 {
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .grid .card {
            background-color: #2d2d2d;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .grid .card:hover {
            transform: scale(1.05);
        }

        .grid .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .grid .card .info {
            padding: 10px;
            text-align: center;
        }

        .grid .card .info h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .grid .card .info p {
            font-size: 14px;
            color: #ffdd00;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img/logo.jpg" alt="EBS MART Logo">
        </div>
        <nav>
            <a href="#">Topup</a>
            <a href="#">Cek Transaksi</a>
            <a href="#">Leaderboard</a>
            <a href="#">Artikel</a>
            <a href="#">Gift Skin</a>
            <a href="#">Kalkulator</a>
        </nav>
    </header>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" scr="img/product1.jpg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></img>
        </div>
        <div class="carousel-item active">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="banner">
        <div class="content">
            <h1>Takapedia Party Diperpanjang</h1>
            <p>Jangan sampai melewatkan eventnya, mulai dari tanggal 7 hingga 30 Oktober 2024 saja!</p>
        </div>
    </div>

    <section class="grid-section">
        <h2>Populer Sekarang!</h2>
        <div class="grid">
            <a href="index.php">
                <div class="card">
                    <img src="img/makanan.jpeg" alt="makanan">
                    <div class="info">
                        <h3>Serba Serbi Makanan</h3>
                        <p>EBS MART</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <img src="img/minuman.jpg" alt="Serba Serbi Minuman">
                    <div class="info">
                        <h3>Serba Serbi Minuman</h3>
                        <p>EBS MART</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <img src="joki-rank.jpg" alt="Joki Rank Mobile Legends">
                    <div class="info">
                        <h3>Joki Rank Mobile Legends</h3>
                        <p>EBS MART</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <img src="free-fire.jpg" alt="Free Fire">
                    <div class="info">
                        <h3>Free Fire</h3>
                        <p>EBS MART</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
</body>
</html>
