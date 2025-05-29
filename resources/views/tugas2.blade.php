@extends('layouts.main')

@section('container')
    <title>Surah Al-Quran</title>
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
        <h1>Daftar Surah Al-Qur'an</h1>

        @isset($error)
            <p style="color:red;">{{ $error }}</p>
        @endisset

        <table id="quranTable" class="display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Arti</th>
                    <th>Jumlah Ayat</th>
                    <th>Tempat Turun</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($surahs as $surah)
                    <tr>
                        <td>{{ $surah['number_of_surah'] }}</td>
                        <td>{{ $surah['name'] }}</td>
                        <td>{{ $surah['type'] }}</td>
                        <td>{{ $surah['name_translations']['id'] }}</td>
                        <td>{{ $surah['number_of_ayah'] }}</td>
                        <td>{{ ucfirst($surah['place']) }}</td>
                        <td>
                            <a href="/tugas2/{{ $surah['number_of_surah'] }}" class="btn-detail">Lihat</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- jQuery & DataTables + Extensions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {


            const table = $('#quranTable').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                language: {
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ditemukan data yang cocok",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data tersedia",
                    "infoFiltered": "(difilter dari total _MAX_ data)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    },
                },
                initComplete: function() {
                    this.api().columns().every(function() {
                        const that = this;
                        $('input', this.tbody()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                }
            });
        });
    </script>
@endsection
