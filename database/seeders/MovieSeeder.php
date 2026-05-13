<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Avatar',
                'synopsis' => 'Un soldado llega a un planeta lleno de vida.',
                'year' => 2009,
                'cover' => 'avatar.jpg'
            ],
            [
                'title' => 'Titanic',
                'synopsis' => 'Historia de amor en el famoso barco Titanic.',
                'year' => 1997,
                'cover' => 'titanic.jpg'
            ],
            [
                'title' => 'Matrix',
                'synopsis' => 'Un hacker descubre la verdad sobre la realidad.',
                'year' => 1999,
                'cover' => 'matrix.jpg'
            ],
            [
                'title' => 'Interstellar',
                'synopsis' => 'Exploradores viajan por el espacio.',
                'year' => 2014,
                'cover' => 'interstellar.jpg'
            ],
            [
                'title' => 'Inception',
                'synopsis' => 'Un ladrón roba secretos dentro de los sueños.',
                'year' => 2010,
                'cover' => 'inception.jpg'
            ],
            [
                'title' => 'The Dark Knight',
                'synopsis' => 'Batman enfrenta al Joker.',
                'year' => 2008,
                'cover' => 'darkknight.jpg'
            ],
            [
                'title' => 'Jurassic Park',
                'synopsis' => 'Un parque lleno de dinosaurios clonados.',
                'year' => 1993,
                'cover' => 'jurassic.jpg'
            ],
            [
                'title' => 'Gladiator',
                'synopsis' => 'Un general romano busca venganza.',
                'year' => 2000,
                'cover' => 'gladiator.jpg'
            ],
            [
                'title' => 'Avengers',
                'synopsis' => 'Superhéroes se unen para salvar el mundo.',
                'year' => 2012,
                'cover' => 'avengers.jpg'
            ],
            [
                'title' => 'Spider-Man',
                'synopsis' => 'Un joven obtiene poderes de araña.',
                'year' => 2002,
                'cover' => 'spiderman.jpg'
            ]
        ]);
    }
}