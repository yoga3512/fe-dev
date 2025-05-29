<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function index()
    {
        $url = "https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json";
        $response = Http::get($url);

        if ($response->successful()) {
            $surahs = json_decode($response->body(), true);
            return view('tugas2', compact('surahs'));
        }

        return view('tugas2')->with('error', 'Gagal mengambil data surah.');
    }

    public function detail($number)
    {
        $url = "https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/{$number}.json";
        $response = Http::get($url);

        if ($response->successful()) {
            $surah = json_decode($response->body(), true);
            return view('tugas2detail', compact('surah'));
        }

        return view('tugas2detail')->with('error', 'Gagal mengambil detail surah.');
    }
}
