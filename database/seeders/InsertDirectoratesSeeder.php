<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InsertDirectoratesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directorates')->insert([
            [
                'name'  => 'Sul',
                'user_id' => User::where('email', 'vagner.mancini@magazineaziul.com.br')->value('id'),
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'name'  => 'Sudeste',
                'user_id' => User::where('email', 'abel.ferreira@magazineaziul.com.br')->value('id'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'  => 'Centro-oeste',
                'user_id' => User::where('email', 'rogerio.ceni@magazineaziul.com.br')->value('id'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
