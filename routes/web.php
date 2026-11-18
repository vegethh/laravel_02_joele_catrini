<?php

use Illuminate\Support\Facades\Route;

// HOMEPAGE
Route::get('/', function () {
    return view('home');
})->name('home');

// CHI SIAMO
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi_siamo');

// SERVIZI
Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi');

// LISTA ARTICOLI
Route::get('/articoli', function () {
    $articoli = [
        [
            "id" => 1,
            "titolo" => "Weekend a Parigi",
            "descrizione" => "Una guida rapida ai posti imperdibili della città luce."
        ],
        [
            "id" => 2,
            "titolo" => "Trekking in Dolomiti",
            "descrizione" => "I sentieri più belli per chi ama la montagna."
        ],
        [
            "id" => 3,
            "titolo" => "Sicilia in 5 giorni",
            "descrizione" => "Mare, cibo e borghi da non perdere."
        ],
    ];

    return view('articoli', ["all_articoli" => $articoli]);
})->name('articoli');

// DETTAGLIO ARTICOLO (rotta parametrica)
Route::get('/articoli/{id}', function ($id) {
    $articoli = [
        [
            "id" => 1,
            "titolo" => "Weekend a Parigi",
            "descrizione" => "Una guida rapida ai posti imperdibili della città luce.",
            "contenuto" => "Parigi regala musei, caffè e passeggiate sulla Senna. Ecco un itinerario pratico per 2 giorni."
        ],
        [
            "id" => 2,
            "titolo" => "Trekking in Dolomiti",
            "descrizione" => "I sentieri più belli per chi ama la montagna.",
            "contenuto" => "Le Dolomiti offrono panorami unici. Partenza all'alba, scarpe adatte e rispetto per la natura."
        ],
        [
            "id" => 3,
            "titolo" => "Sicilia in 5 giorni",
            "descrizione" => "Mare, cibo e borghi da non perdere.",
            "contenuto" => "Da Palermo a Taormina: cultura, spiagge e street food in un unico viaggio."
        ],
    ];

    foreach ($articoli as $articolo) {
        if ($articolo['id'] == $id) {
            return view('articolo-dettaglio', ["articolo" => $articolo]);
        }
    }
})->name('articolo_dettaglio');