@extends('layouts.main')

@section('container')
    <title>Deret Fibonacci</title>
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
    <a href="{{ url('/') }}">← Kembali ke Menu</a>

    <div class="content">

        {{-- CEK BILANGAN FIBONACI --}}
        <h2>Deret Fibonacci</h2>
        <p>Masukkan jumlah deret dan pilih urutan tampilan:</p>
        <input type="number" id="jumlahDeret" placeholder="Tentukan deretnya, ex: 10" min="1" placeholder="" />
        <select id="urutan">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
        <br />
        <button onclick="tampilkanFibonacci()">Tampilkan</button>
        <div id="result"></div>


    </div>


    <script>
        function fibonacci(n) {
            const hasil = [];
            for (let i = 0; i < n; i++) {
                if (i === 0) {
                    hasil.push(0);
                } else if (i === 1) {
                    hasil.push(1);
                } else {
                    hasil.push(hasil[i - 1] + hasil[i - 2]);
                }
            }
            return hasil;
        }

        // function isPalindrome(number) {
        //     const str = number.toString();
        //     return str === str.split('').reverse().join('');
        // }

        function tampilkanFibonacci() {
            const jumlah = parseInt(document.getElementById("jumlahDeret").value);
            const urutan = document.getElementById("urutan").value;
            const resultDiv = document.getElementById("result");
            // const palindromDiv = document.getElementById("palindromResult");

            if (isNaN(jumlah) || jumlah <= 0) {
                resultDiv.innerHTML = "<span style='color:red;'>Masukkan angka yang valid (minimal 1)</span>";
                palindromDiv.innerHTML = "";
                return;
            }

            let deret = fibonacci(jumlah);

            // konversi ke angka palindrom
            // const deretAsli = [...deret];

            // Urutkan deret berdasarkan pilihan
            deret = urutan === "desc" ? [...deret].sort((a, b) => b - a) : [...deret].sort((a, b) => a - b);

            // Tabel Deret Fibonacci
            let tabelHTML =
                `<h3>Deret yang dihasilkan secara (${urutan === "asc" ? "Ascending" : "Descending"})</h3><table>`;
            tabelHTML += "<tr><th>Urutan</th><th>Nilai</th></tr>";

            deret.forEach((nilai, index) => {
                tabelHTML += `<tr><td>${index + 1}</td><td>${nilai}</td></tr>`;
            });

            tabelHTML += "</table>";
            resultDiv.innerHTML = tabelHTML;

            // Filter dan tampilkan Palindrom dari deret asli
            // const palindroms = deretAsli
            //     .map((val, idx) => ({
            //         index: idx,
            //         nilai: val
            //     }))
            //     .filter(item => isPalindrome(item.nilai));

            // let palindromTable = "<h3>Angka Palindrom dalam Deret</h3><table>";
            // palindromTable += "<tr><th>Index</th><th>Nilai</th></tr>";

            // palindroms.forEach(item => {
            //     palindromTable += `<tr><td>${item.index}</td><td>${item.nilai}</td></tr>`;
            // });

            // palindromTable += "</table>";
            // palindromDiv.innerHTML = palindroms.length ? palindromTable : "<p>Tidak ada angka palindrom ditemukan.</p>";
        }
    </script>
@endsection
