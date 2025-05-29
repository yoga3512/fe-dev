@extends('layouts.main')
@section('container')
    <div class="container">

        <div class="container">
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
            <div id="palindromResult"></div>

            {{-- CEK PALINDROM --}}

            <h2>Cek Palindrom Kata</h2>
            <input type="text" id="inputKata" placeholder="Masukkan kata disini" />
            <br />
            <button onclick="cekPalindrom()">Cek</button>
            <div id="hasil" class="result"></div>
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

            function isPalindrome(number) {
                const str = number.toString();
                return str === str.split('').reverse().join('');
            }

            function tampilkanFibonacci() {
                const jumlah = parseInt(document.getElementById("jumlahDeret").value);
                const urutan = document.getElementById("urutan").value;
                const resultDiv = document.getElementById("result");
                const palindromDiv = document.getElementById("palindromResult");

                if (isNaN(jumlah) || jumlah <= 0) {
                    resultDiv.innerHTML = "<span style='color:red;'>Masukkan angka yang valid (minimal 1)</span>";
                    palindromDiv.innerHTML = "";
                    return;
                }

                let deret = fibonacci(jumlah);

                // Simpan deret asli untuk palindrom
                const deretAsli = [...deret];

                // Urutkan deret berdasarkan pilihan
                deret = urutan === "desc" ? [...deret].sort((a, b) => b - a) : [...deret].sort((a, b) => a - b);

                // Tabel Deret Fibonacci
                let tabelHTML = `<h3>Deret Fibonacci (${urutan === "asc" ? "Ascending" : "Descending"})</h3><table>`;
                tabelHTML += "<tr><th>Urutan</th><th>Nilai</th></tr>";

                deret.forEach((nilai, index) => {
                    tabelHTML += `<tr><td>${index + 1}</td><td>${nilai}</td></tr>`;
                });

                tabelHTML += "</table>";
                resultDiv.innerHTML = tabelHTML;

                // Filter dan tampilkan Palindrom dari deret asli
                const palindroms = deretAsli
                    .map((val, idx) => ({
                        index: idx,
                        nilai: val
                    }))
                    .filter(item => isPalindrome(item.nilai));

                let palindromTable = "<h3>Angka Palindrom dalam Deret</h3><table>";
                palindromTable += "<tr><th>Index</th><th>Nilai</th></tr>";

                palindroms.forEach(item => {
                    palindromTable += `<tr><td>${item.index}</td><td>${item.nilai}</td></tr>`;
                });

                palindromTable += "</table>";
                palindromDiv.innerHTML = palindroms.length ? palindromTable : "<p>Tidak ada angka palindrom ditemukan.</p>";
            }

            function isPalindrome(text) {
                const cleaned = text.toLowerCase().replace(/[^a-z0-9]/gi, '');
                return cleaned === cleaned.split('').reverse().join('');
            }

            function cekPalindrom() {
                const input = document.getElementById("inputKata").value;
                const hasilDiv = document.getElementById("hasil");

                if (!input.trim()) {
                    hasilDiv.innerHTML = "⚠️ Masukkan kata atau kalimat terlebih dahulu.";
                    hasilDiv.style.color = "orange";
                    return;
                }

                if (isPalindrome(input)) {
                    hasilDiv.innerHTML = `✅ "${input}" adalah palindrom!`;
                    hasilDiv.style.color = "green";
                } else {
                    hasilDiv.innerHTML = `❌ "${input}" bukan palindrom.`;
                    hasilDiv.style.color = "red";
                }
            }
        </script>
    @endsection
