<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;

class InsertSellerUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get ID from specific units used on this example
        $Belo_Horizonte = Unit::where('name', 'Belo Horizonte')->value('id');
        $Campo_Grande = Unit::where('name', 'Campo Grande')->value('id');
        $Cuiaba = Unit::where('name', 'Cuiaba')->value('id');
        $Curitiba = Unit::where('name', 'Curitiba')->value('id');
        $Florianopolis = Unit::where('name', 'Florianopolis')->value('id');
        $Goiania = Unit::where('name', 'Goiania')->value('id');
        $Porto_Alegre = Unit::where('name', 'Porto Alegre')->value('id');
        $Rio_de_Janeiro = Unit::where('name', 'Rio de Janeiro')->value('id');
        $Sao_Paulo = Unit::where('name', 'Sao Paulo')->value('id');
        $Vitoria = Unit::where('name', 'Vitória')->value('id');


        DB::table('seller_unit')->insert([
            // Belo Horizonte
            [
                'user_id' => User::where('email', 'afonso.afancar@magazineaziul.com.br')->value('id'),
                'unit_id' => $Belo_Horizonte,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'user_id' => User::where('email', 'alceu.andreoli@magazineaziul.com.br')->value('id'),
                'unit_id' => $Belo_Horizonte,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'amalia.zago@magazineaziul.com.br')->value('id'),
                'unit_id' => $Belo_Horizonte,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'carlos.eduardo@magazineaziul.com.br')->value('id'),
                'unit_id' => $Belo_Horizonte,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'luiz.felipe@magazineaziul.com.br')->value('id'),
                'unit_id' => $Belo_Horizonte,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Campo Grande
            [
                'user_id' => User::where('email', 'breno@magazineaziul.com.br')->value('id'),
                'unit_id' => $Campo_Grande,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'emanuel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Campo_Grande,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'ryan@magazineaziul.com.br')->value('id'),
                'unit_id' => $Campo_Grande,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'vitor.hugo@magazineaziul.com.br')->value('id'),
                'unit_id' => $Campo_Grande,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'yuri@magazineaziul.com.br')->value('id'),
                'unit_id' => $Campo_Grande,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Cuiaba
            [
                'user_id' => User::where('email', 'benjamin@magazineaziul.com.br')->value('id'),
                'unit_id' => $Cuiaba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'erick@magazineaziul.com.br')->value('id'),
                'unit_id' => $Cuiaba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'enzo.gabriel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Cuiaba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'fernando@magazineaziul.com.br')->value('id'),
                'unit_id' => $Cuiaba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'joaquim@magazineaziul.com.br')->value('id'),
                'unit_id' => $Cuiaba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Curitiba
            [
                'user_id' => User::where('email', 'andré@magazineaziul.com.br')->value('id'),
                'unit_id' => $Curitiba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'raul@magazineaziul.com.br')->value('id'),
                'unit_id' => $Curitiba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'marcelo@magazineaziul.com.br')->value('id'),
                'unit_id' => $Curitiba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'julio.césar@magazineaziul.com.br')->value('id'),
                'unit_id' => $Curitiba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'cauê@magazineaziul.com.br')->value('id'),
                'unit_id' => $Curitiba,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Florianopolis
            [
                'user_id' => User::where('email', 'benício@magazineaziul.com.br')->value('id'),
                'unit_id' => $Florianopolis,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'vitor.gabriel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Florianopolis,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'augusto@magazineaziul.com.br')->value('id'),
                'unit_id' => $Florianopolis,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'pedro.lucas@magazineaziul.com.br')->value('id'),
                'unit_id' => $Florianopolis,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'luiz.gustavo@magazineaziul.com.br')->value('id'),
                'unit_id' => $Florianopolis,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Goiania
            [
                'user_id' => User::where('email', 'giovanni@magazineaziul.com.br')->value('id'),
                'unit_id' => $Goiania,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'renato@magazineaziul.com.br')->value('id'),
                'unit_id' => $Goiania,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'diego@magazineaziul.com.br')->value('id'),
                'unit_id' => $Goiania,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'joão.paulo@magazineaziul.com.br')->value('id'),
                'unit_id' => $Goiania,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'renan@magazineaziul.com.br')->value('id'),
                'unit_id' => $Goiania,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Porto Alegre
            [
                'user_id' => User::where('email', 'luiz.fernando@magazineaziul.com.br')->value('id'),
                'unit_id' => $Porto_Alegre,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'anthony@magazineaziul.com.br')->value('id'),
                'unit_id' => $Porto_Alegre,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'lucas.gabriel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Porto_Alegre,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'thales@magazineaziul.com.br')->value('id'),
                'unit_id' => $Porto_Alegre,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'luiz.miguel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Porto_Alegre,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Rio de Janeiro
            [
                'user_id' => User::where('email', 'henry@magazineaziul.com.br')->value('id'),
                'unit_id' => $Rio_de_Janeiro,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'marcos.vinicius@magazineaziul.com.br')->value('id'),
                'unit_id' => $Rio_de_Janeiro,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'kevin@magazineaziul.com.br')->value('id'),
                'unit_id' => $Rio_de_Janeiro,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'levi@magazineaziul.com.br')->value('id'),
                'unit_id' => $Rio_de_Janeiro,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'enrico@magazineaziul.com.br')->value('id'),
                'unit_id' => $Rio_de_Janeiro,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Sao Paulo
            [
                'user_id' => User::where('email', 'joão.lucas@magazineaziul.com.br')->value('id'),
                'unit_id' => $Sao_Paulo,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'hugo@magazineaziul.com.br')->value('id'),
                'unit_id' => $Sao_Paulo,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'luiz.guilherme@magazineaziul.com.br')->value('id'),
                'unit_id' => $Sao_Paulo,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'matheus.henrique@magazineaziul.com.br')->value('id'),
                'unit_id' => $Sao_Paulo,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'miguel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Sao_Paulo,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Vitória
            [
                'user_id' => User::where('email', 'davi@magazineaziul.com.br')->value('id'),
                'unit_id' => $Vitoria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'gabriel@magazineaziul.com.br')->value('id'),
                'unit_id' => $Vitoria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'arthur@magazineaziul.com.br')->value('id'),
                'unit_id' => $Vitoria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'lucas@magazineaziul.com.br')->value('id'),
                'unit_id' => $Vitoria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => User::where('email', 'matheus@magazineaziul.com.br')->value('id'),
                'unit_id' => $Vitoria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
