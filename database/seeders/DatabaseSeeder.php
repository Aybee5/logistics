<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use App\Shipment;
use App\Setting;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory()->count(5)->create();
    
    //    Shipment::factory()->count(15)->create();
      
       $this->call(AdminCustomerUserSeeder::class);
       $this->call(ShipmentRateSeeder::class);
       $this->call(SettingSeeder::class);
    }
}
