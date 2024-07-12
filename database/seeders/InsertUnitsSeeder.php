<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Directorate;

class InsertUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'name' => 'Porto Alegre',
                'coordinates' => DB::raw('POINT(-30.048750057541955, -51.228587422990806)'),
                'user_id' => User::where('email', 'ronaldinho.gaucho@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sul')->value('id')
            ],
            [
                'name' => 'Florianopolis',
                'coordinates' => DB::raw('POINT(-27.55393525017396, -48.49841515885026)'),
                'user_id' => User::where('email', 'roberto.firmino@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sul')->value('id')
            ],
            [
                'name' => 'Curitiba',
                'coordinates' => DB::raw('POINT(-25.473704465731746, -49.24787198992874)'),
                'user_id' => User::where('email', 'alex.de.souza@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sul')->value('id')
            ],
            [
                'name' => 'Sao Paulo',
                'coordinates' => DB::raw('POINT(-23.544259437612844, -46.64370714029131)'),
                'user_id' => User::where('email', 'françoaldo.souza@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sudeste')->value('id')
            ],
            [
                'name' => 'Rio de Janeiro',
                'coordinates' => DB::raw('POINT(-22.923447510604802, -43.23208495438858)'),
                'user_id' => User::where('email', 'romário.faria@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sudeste')->value('id')
            ],
            [
                'name' => 'Belo Horizonte',
                'coordinates' => DB::raw('POINT(-19.917854829716372, -43.94089385954766)'),
                'user_id' => User::where('email', 'ricardo.goulart@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sudeste')->value('id')
            ],
            [
                'name' => 'Vitória',
                'coordinates' => DB::raw('POINT(-20.340992420772206, -40.38332271475097)'),
                'user_id' => User::where('email', 'dejan.petkovic@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Sudeste')->value('id')
            ],
            [
                'name' => 'Campo Grande',
                'coordinates' => DB::raw('POINT(-20.462652006300377, -54.615658937666645)'),
                'user_id' => User::where('email', 'deyverson.acosta@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Centro-oeste')->value('id')
            ],
            [
                'name' => 'Goiania',
                'coordinates' => DB::raw('POINT(-16.673126240814387, -49.25248826354209)'),
                'user_id' => User::where('email', 'harlei.silva@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Centro-oeste')->value('id')
            ],
            [
                'name' => 'Cuiaba',
                'coordinates' => DB::raw('POINT(-15.601754458320842, -56.09832706558089)'),
                'user_id' => User::where('email', 'walter.henrique@magazineaziul.com.br')->value('id'),
                'directorate_id' => Directorate::where('name', 'Centro-oeste')->value('id')
            ],
        ]);

    }
}
