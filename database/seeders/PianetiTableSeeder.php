<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pianeta;

class PianetiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pianeti = config('pianeti.pianeti');
        foreach($pianeti as $pianeta) {
            $newPianeta = new Pianeta ();
            $newPianeta->nome = $pianeta['nome'];
            $newPianeta->sistema = $pianeta['sistema'];
            $newPianeta->settore = $pianeta['settore'];
            $newPianeta->popolazione = $pianeta['popolazione'];
            $newPianeta->tipo = $pianeta['tipo'];
            $newPianeta->save();
        }
    }
}
