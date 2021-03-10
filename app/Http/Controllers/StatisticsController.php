<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// controller je skupina stranica koje se ticu iste teme funkcionalnosti. Npr,
// ovaj kontroler je zaduzen za sve stranice koje se ticu statistike na
// stranici
class StatisticsController extends Controller
{
    private function priprema_podataka() {
        $korisnici = [[
            "name" => "korisnik 1",
            "id" => 1
        ], [
            "name" => "korisnik 2",
            "id" => 2
        ], [
            "name" => "korisnik x",
            "id" => 3
        ]];
        $kategorije = [[
            "name" => "kategorija",
            "id" => 1
        ], [
            "name" => "itd",
            "id" => 2
        ]];
        $komentari = [[
            "text" => "komentar 1",
            "id" => 1
        ], [
            "text" => "komentar 2",
            "id" => 2
        ]];
        return compact('korisnici', 'kategorije', 'komentari');
    }
    // Laravel Framework ce sam da zna da je ovo jedna "akcija" u kontroleru
    // zato sto se ovaj fajl nalazi u controllers folderu.
    public function get_statistics() {
        // prvi parametar funkcije view je koji view se poziva, a folderi su
        // odvojeni tackom. Npr, "statistics.general_statistics" znaci da cemo
        // prikazati view iz fajla views/statistics/general_statistics.
        // Drugi parametar funkcije su varijable koje ce biti dostupne u tom view-u
        return view('statistics.general_statistics', $this->priprema_podataka());
    }

    public function get_user_statistics() {
        return view('statistics.user_statistics', $this->priprema_podataka());
    }

    public function get_category_statistics() {
        return view('statistics.category_statistics', $this->priprema_podataka());
    }

    public function get_comments_statistics() {
        return view('statistics.comments_statistics', $this->priprema_podataka());
    }
}
