<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Astronave;

class AstronaviTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $astronavi = config('astronavi.astronavi');
        
        foreach($astronavi as $astronave) {
            $newAstronave = new Astronave ();
            $newAstronave->nome = $astronave['nome'];
            $newAstronave->classe = $astronave['classe'];
            $newAstronave->lunghezza = $astronave['lunghezza'];
            $newAstronave->equipaggio = $astronave['equipaggio'];
            $newAstronave->passeggeri = $astronave['passeggeri'];
            $newAstronave->velocità_luce = $astronave['velocità_luce'];
            $newAstronave->personaggio_id = $astronave['personaggio_id'];
            $newAstronave->fazione_id = $astronave['fazione_id'];
            $newAstronave->save();
        }
    }
}
