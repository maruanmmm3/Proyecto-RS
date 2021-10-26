<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('proyectos');
        Storage::deleteDirectory('promocions');
        Storage::deleteDirectory('orquestas');
        Storage::makeDirectory('proyectos');
        Storage::makeDirectory('promocions');
        Storage::makeDirectory('orquestas');
        $this->call(UserSeeder::class);
    }
}
