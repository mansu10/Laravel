<?php

use Illuminate\Database\Seeder;  
use App\Device;

class DeviceTableSeeder extends Seeder {

  public function run()
  {
    DB::table('devices')->delete();

    for ($i=0; $i < 10; $i++) {
      Device::create([
        'uid'   => 'D00'.$i,
        'type'    => 'device',
        'status'    => 1,
      ]);
    }
  }

}