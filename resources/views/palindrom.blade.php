@extends('layouts.main')

@section('container')
    <title>Palindrom</title>
    <a href="{{ url('/') }}">← Kembali ke Menu</a>
    <style>
        .content {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 40px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 250px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007acc;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #005fa3;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>

    <div class="content">


        {{-- CEK PALINDROM --}}

        <h1>Cek Kata Palindrom</h1>
        <p>Masukkan kata untuk mengecek apakah palindrom atau tidak</p>

        <input type="text" id="inputKata" placeholder="Masukkan kata disini | Contoh: katak" />
        <button onclick="cekPalindrom()">Cek</button>
        <div id="hasil" class="result"></div>
    </div>




    <script>
        function isPalindrome(text) {
            const cleaned = text.toLowerCase().replace(/[^a-z0-9]/gi, '');
            return cleaned === cleaned.split('').reverse().join('');
        }

        function cekPalindrom() {
            const input = document.getElementById("inputKata").value;
            const hasilDiv = document.getElementById("hasil");

            if (!input.trim()) {
                hasilDiv.innerHTML = "<span style='color:red;'>Masukkan kata terlebih dahulu</span>";

                return;
            }

            if (isPalindrome(input)) {
                hasilDiv.innerHTML = `✅ "${input}" adalah palindrom!`;
                hasilDiv.style.color = "green";
                hasilDiv.style.fontSize = "25px";
            } else {
                hasilDiv.innerHTML = `❌ "${input}" bukan palindrom.`;
                hasilDiv.style.color = "red";
                hasilDiv.style.fontSize = "25px";
            }
        }
    </script>
@endsection
