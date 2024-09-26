<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personaggio;

class PersonaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personaggi = config('personaggi.personaggi');
        foreach($personaggi as $personaggio) {
            $newPersonaggio = new Personaggio ();
            $newPersonaggio->nome = $personaggio['nome'];
            $newPersonaggio->specie = $personaggio['specie'];
            $newPersonaggio->pianeta = $personaggio['pianeta'];
            $newPersonaggio->fazione = $personaggio['fazione'];
            $newPersonaggio->forza = $personaggio['forza'];
            $newPersonaggio->save();
        }
    }
}
