<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $cities = [
            ['id' => 2, 'name' => 'CIUDAD AUTÓNOMA DE BUENOS AIRES'],
            ['id' => 6, 'name' => 'BUENOS AIRES'],
            ['id' => 10, 'name' => 'CATAMARCA'],
            ['id' => 14, 'name' => 'CÓRDOBA'],
            ['id' => 22, 'name' => 'CHACO'],
            ['id' => 26, 'name' => 'CHUBUT'],
            ['id' => 18, 'name' => 'CORRIENTES'],
            ['id' => 30, 'name' => 'ENTRE RÍOS'],
            ['id' => 34, 'name' => 'FORMOSA'],
            ['id' => 38, 'name' => 'JUJUY'],
            ['id' => 42, 'name' => 'LA PAMPA'],
            ['id' => 46, 'name' => 'LA RIOJA'],
            ['id' => 50, 'name' => 'MENDOZA'],
            ['id' => 54, 'name' => 'MISIONES'],
            ['id' => 58, 'name' => 'NEUQUÉN'],
            ['id' => 62, 'name' => 'RÍO NEGRO'],
            ['id' => 66, 'name' => 'SALTA'],
            ['id' => 70, 'name' => 'SAN JUAN'],
            ['id' => 74, 'name' => 'SAN LUIS'],
            ['id' => 78, 'name' => 'SANTA CRUZ'],
            ['id' => 82, 'name' => 'SANTA FE'],
            ['id' => 86, 'name' => 'SANTIAGO DEL ESTERO'],
            ['id' => 90, 'name' => 'TUCUMÁN'],
            ['id' => 94, 'name' => 'TIERRA DEL FUEGO'],
        ];

        foreach ($cities as $city) {
            App\City::create($city);
        }
    }
}
