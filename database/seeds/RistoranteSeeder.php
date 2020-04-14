<?php

use Illuminate\Database\Seeder;

class RistoranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ristorante')->insert([
            'description' => "Questo e' il ristorante",
            'seo_title' => "Pagina Ristorante",
            'seo_keywords' => "Berbatoja, Ristorante",
            'seo_description' => "Questo e' il ristorante",
        ]);
    }
}
