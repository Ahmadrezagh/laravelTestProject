<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $this->call([
            SettingGroupSeeder::class,
            SettingSeeder::class,
            UserSeeder::class,
            UserTypeSeeder::class,
            PermissionSeeder::class,
            //fake data
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
