@extends('layouts.main')

@section('container')

    <a href="{{ url('/tugas2') }}">← Kembali ke daftar</a>
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
    @isset($error)
        <p style="color:red">{{ $error }}</p>
    @endisset
    <div class="content">
        <div class="container">
            @if (isset($surah))
                <h1>{{ $surah['name'] }}</h1>
                <div class="info">
                    <p><strong>Arti Surah:</strong> {{ $surah['name_translations']['id'] }}</p>
                    <p><strong>Jumlah Ayat:</strong> ({{ $surah['number_of_ayah'] }}) </p>
                    <p><strong>Tempat Turun:</strong> {{ $surah['place'] }}</p>
                    <p><strong>Jenis:</strong> {{ $surah['type'] }}</p>
                </div>

                <h2>Bacaan & Terjemahan:</h2>

                @foreach ($surah['verses'] as $verse)
                    <div class="row">
                        <table>
                            <tr class="row-bacaan">
                                <td>
                                    <div class="arab"><strong>{{ $verse['text'] }}</strong></div>
                                </td>
                            </tr>
                            <tr class="row-bacaan">

                                <td>
                                    <div class="translation">"{{ $verse['translation_id'] }}"</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                @endforeach
            @endif
            <h3>-= Selesai =-</h2>
        </div>
    </div>


@endsection
