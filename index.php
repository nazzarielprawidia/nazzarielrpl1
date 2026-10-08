<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi HPP Produk</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #111827, #2563eb);
            padding: 30px 15px;
        }

        .app {
            max-width: 500px;
            margin: auto;
        }

        .card {
            background: white;
            border-radius: 22px;
            padding: 25px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .icon {
            width: 65px;
            height: 65px;
            margin: auto;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        h1 {
            margin-bottom: 5px;
        }

        .header p {
            color: #6b7280;
            margin-top: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 15px 0 7px;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .hasil {
            margin-top: 25px;
            background: #f8fafc;
            border-radius: 15px;
            padding: 20px;
            display: none;
        }

        .hasil h2 {
            margin-top: 0;
            color: #111827;
        }

        .data {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .total {
            margin-top: 15px;
            padding: 15px;
            background: #eff6ff;
            border-radius: 10px;
        }

        .hpp {
            margin-top: 15px;
            padding: 20px;
            text-align: center;
            background: #dcfce7;
            border-radius: 12px;
        }

        .hpp small {
            color: #166534;
        }

        .hpp h3 {
            margin: 8px 0 0;
            font-size: 28px;
            color: #15803d;
        }

        .rumus {
            margin-top: 15px;
            padding: 12px;
            background: #f3f4f6;
            border-radius: 8px;
            text-align: center;
            font-size: 13px;
            color: #4b5563;
        }
    </style>
</head>

<body>

<div class="app">

    <div class="card">

        <div class="header">
            <div class="icon">💰</div>
            <h1>Kalkulator HPP</h1>
            <p>Hitung Harga Pokok Penjualan Produk</p>
        </div>


        <label>Nama Produk</label>
        <input type="text" id="produk" value="Stick Kelor">


        <label>Biaya Bahan Baku</label>
        <input type="number" id="bahan" value="100000">


        <label>Biaya Tenaga Kerja</label>
        <input type="number" id="tenaga" value="50000">


        <label>Biaya Overhead</label>
        <input type="number" id="overhead" value="25000">


        <label>Jumlah Produk</label>
        <input type="number" id="jumlah" value="50">


        <button onclick="hitungHPP()">
            🧮 HITUNG HPP
        </button>


        <div class="hasil" id="hasil">

            <h2>📊 Hasil Perhitungan</h2>

            <div class="data">
                <span>Produk</span>
                <b id="rProduk"></b>
            </div>

            <div class="data">
                <span>Bahan Baku</span>
                <b id="rBahan"></b>
            </div>

            <div class="data">
                <span>Tenaga Kerja</span>
                <b id="rTenaga"></b>
            </div>

            <div class="data">
                <span>Overhead</span>
                <b id="rOverhead"></b>
            </div>

            <div class="total">
                <b>Total Biaya</b>
                <h3 id="rTotal"></h3>
            </div>

            <div class="data">
                <span>Jumlah Produk</span>
                <b id="rJumlah"></b>
            </div>

            <div class="hpp">
                <small>HARGA POKOK PENJUALAN / PRODUK</small>
                <h3 id="rHPP"></h3>
            </div>

            <div class="rumus" id="rRumus"></div>

        </div>

    </div>

</div>


<script>

function rupiah(angka) {
    return "Rp " + angka.toLocaleString("id-ID");
}


function hitungHPP() {

    let produk =
        document.getElementById("produk").value;

    let bahan =
        Number(document.getElementById("bahan").value);

    let tenaga =
        Number(document.getElementById("tenaga").value);

    let overhead =
        Number(document.getElementById("overhead").value);

    let jumlah =
        Number(document.getElementById("jumlah").value);


    if (produk == "" || jumlah <= 0) {
        alert("Isi data dengan benar!");
        return;
    }


    // Menghitung total biaya
    let total = bahan + tenaga + overhead;


    // Menghitung HPP
    let hpp = total / jumlah;


    // Menampilkan hasil
    document.getElementById("rProduk").innerText =
        produk;

    document.getElementById("rBahan").innerText =
        rupiah(bahan);

    document.getElementById("rTenaga").innerText =
        rupiah(tenaga);

    document.getElementById("rOverhead").innerText =
        rupiah(overhead);

    document.getElementById("rTotal").innerText =
        rupiah(total);

    document.getElementById("rJumlah").innerText =
        jumlah + " produk";

    document.getElementById("rHPP").innerText =
        rupiah(Math.round(hpp));


    document.getElementById("rRumus").innerText =
        "HPP = " + rupiah(total) +
        " ÷ " + jumlah +
        " = " + rupiah(Math.round(hpp));


    document.getElementById("hasil").style.display =
        "block";
}


// Langsung menghitung contoh saat halaman dibuka
hitungHPP();

</script>

</body>
</html>
