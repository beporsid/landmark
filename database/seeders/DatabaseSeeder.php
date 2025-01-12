<?php

namespace Database\Seeders;

use App\Http\Controllers\Dev\SpatiePermissionController;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Shop::factory(100)->create();

        $this->call([
            UserSeeder::class,
            CaseSeeder::class,
            VariableSeeder::class,
            GallerySeeder::class,
            PartnerSeeder::class
        ]);


        $spatie = new SpatiePermissionController();
        $spatie->addRoles();
        $spatie->assignRoles();

    }
}
