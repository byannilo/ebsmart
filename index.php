<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Up Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000165;
        }
        .header {
            background-color: #2c2c2c;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header input {
            padding: 8px;
            border-radius: 5px;
            border: none;
        }
        .container {
            margin: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .step {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }
        .step h2 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
        .step input {
            width: calc(50% - 10px);
            padding: 10px;
            margin: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .step input[type="checkbox"] {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }
        .special-items {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .item {
            background-color: #f8f8f8;
            padding: 15px;
            border-radius: 8px;
            width: calc(25% - 15px);
            text-align: center;
            border: 1px solid #ddd;
            cursor: pointer;
        }
        .item:hover {
            border-color: #ffc107;
            background-color: #fff8e1;
        }
        .item p {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
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
        .footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #2c2c2c;
            color: white;
            align-items: center;
        }
        .footer button {
            padding: 10px 20px;
            background-color: #ffc107;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .footer button:hover {
            background-color: #e0a800;
        }
        .promo-button {
            background-color: #ffc107;
            color: black;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .promo-button:hover {
            background-color: #e0a800;
        }
        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .payment-option {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f8f8;
            position: relative;
        }
        .payment-option:hover {
            border-color: #ffc107;
            background-color: #fff8e1;
        }
        .best-price {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ffc107;
            color: black;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>EBS MART</h1>
    <input type="text" placeholder="Cari Game atau Voucher">
</div>

<div class="container">
    <!-- Step 1 -->
    <div class="step">
        <h2>1. Masukkan Data Akun</h2>
        <input type="text" placeholder="Ketikkan ID KTM">
        <input type="text" placeholder="Ketikkan NAMA">
        <label><input type="checkbox"> Save Informasi Untuk Pembelian Berikutnya</label>
    </div>

    <!-- Step 2 -->
    <section class="grid-section">
    <h2>2. Pilih Nominal</h2>
        <div class="grid">
            <div class="card">
                <img src="img/makanan_momogi.jpg" alt="Joki Rank Honor Of Kings">
                <div class="info">
                    <h3>Joki Rank Honor Of Kings</h3>
                    <p>Takapedia</p>
                </div>
            </div>
            <div class="card">
                <img src="img/minuman_fruittea.jpg" alt="Mobile Legends">
                <div class="info">
                    <h3>Mobile Legends</h3>
                    <p>Moonton</p>
                </div>
            </div>
            <div class="card">
                <img src="joki-rank.jpg" alt="Joki Rank Mobile Legends">
                <div class="info">
                    <h3>Joki Rank Mobile Legends</h3>
                    <p>Takapedia</p>
                </div>
            </div>
            <div class="card">
                <img src="free-fire.jpg" alt="Free Fire">
                <div class="info">
                    <h3>Free Fire</h3>
                    <p>Garena</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Step 2 -->
        <div class="step">
        <h2>2. Pilih Nominal</h2>
        <div class="special-items">
            <div class="item">
                <p>Weekly Diamond Pass</p>
                <p>Rp 26.998</p>
            </div>
            <div class="item">
                <p>2x Weekly Diamond Pass</p>
                <p>Rp 53.998</p>
            </div>
            <div class="item">
                <p>3x Weekly Diamond Pass</p>
                <p>Rp 80.998</p>
            </div>
            <div class="item">
                <p>4x Weekly Diamond Pass</p>
                <p>Rp 107.998</p>
            </div>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="step">
        <h2>3. Masukkan Jumlah Pembelian</h2>
        <input type="number" value="1" min="1">
        <button class="promo-button">+</button>
        <button class="promo-button">-</button>
    </div>

    <!-- Step 4 -->
    <div class="step">
        <h2>4. Kode Promo</h2>
        <input type="text" placeholder="Ketik Kode Promo Kamu">
        <button class="promo-button">Gunakan</button>
        <button class="promo-button">Pakai Promo Yang Tersedia</button>
    </div>

    <!-- Step 5 -->
    <div class="step">
        <h2>5. Pilih Pembayaran</h2>
            <div class="payment-option">
                <span>QRIS (All Payment)</span>
                <span class="best-price">BEST PRICE</span>
            </div>
            <div class="payment-option">
                <span>E-Wallet</span>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p>Belum ada item produk yang dipilih.</p>
    <button>Pesan Sekarang!</button>
</div>

</body>
</html>