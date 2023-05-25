<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cards', function(){
    
    $series = [
        [
            'name' => 'The 100',
            'year' => '2014',
            'director' => 'Jae Marchent',
            'img' => '/img/the100.jpg',
            'description' => "Nel 2149, 97 anni dopo una guerra nucleare globale avvenuta nel 2052 che ha sconvolto il pianeta Terra, del genere umano rimane solo una stazione spaziale, l'Arca, un complesso di 12 stazioni spaziali minori che si trovavano in orbita al momento del disastro."
        ],

        [
            'name' => 'Breaking Bad',
            'year' => '2013',
            'director' => 'Vince Gilligan',
            'img' => '/img/ww.jpg',
            'description' => 'Un professore di chimica, Walter White, scopre di avere un cancro ai polmoni giudicato incurabile e decide di diventare socio di uno spacciatore di droga, Jesse, nella produzione di anfetamine, di modo da garantire benessere alla famiglia.'
        ],

        [
            'name' => 'The Office',
            'year' => '2005',
            'director' => 'Gregory Martin Daniels',
            'img' => '/img/theoffice.jpg',
            'description' => 'The Office è una sitcom mockumentary americana che racconta la vita quotidiana in ufficio dei dipendenti della filliale della Dunder Mifflin Paper Company a Scranton, in Pennsylvania.'
        ],

        [
            'name' => 'Sex Education',
            'year' => '2019',
            'director' => 'Ben Taylor',
            'img' => '/img/sex-education.jpg',
            'description' => 'La serie, ambientata nel Regno Unito[1], vede come protagonista Otis Milburn, un comune adolescente britannico, figlio di Jean, una scrittrice nonché terapista sessuale di fama nazionale. La sua vita è stata sempre invasa dal lavoro della madre, tanto da renderlo un ragazzo particolarmente sensibile ai problemi altrui, specialmente se di natura sessuale.'
        ],

    ];



    return view('cardspage', ['series' => $series]);
})->name('serietv');

Route::get('/Aboutus', function() {
    $members = [
        [
            'name' => 'Dario',
            'surname' => 'Medugno',
            'age'=> '33',
            'description'=> 'Junior Web Developer',
            'img' => '/img/DarioM.jpg',
            'url-insta'=> '',
            'url-ln' => 'https://www.linkedin.com/in/dario-medugno-807b3862/',
        ],
        [
            'name' => 'Alessio',
            'surname' => 'Palmeri',
            'age'=> '22',
            'description'=> 'Junior Web Developer',
            'img' => '/img/AlessioP.jpg',
            'url-insta'=> '',
            'url-ln' => 'https://www.linkedin.com/in/alessio-palmeri-web-developer/',

        ],
        [
            'name' => 'Gioele',
            'surname' => 'Coviello',
            'age'=> '29',
            'description'=> 'Junior Web Developer',
            'img' => '/img/GioeleC.jpg',
            'url-insta'=> '',
            'url-ln' => 'https://www.linkedin.com/in/gioele-coviello-9b2b3a230/',
        ],
        [
            'name' => 'Giuseppe',
            'surname' => 'Saluto',
            'age'=> '29',
            'description'=> 'Junior Web Developer',
            'img' => '/img/GiuseppeS.jpg',
            'url-insta'=> '',
            'url-ln' => 'https://www.linkedin.com/in/giuseppe-saluto/',
        ],
    ];
    return view('Aboutus', ['members' => $members]);
})->name('chisiamo');