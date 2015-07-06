<?php

use Illuminate\Database\Seeder;  
use App\Administrator;

class AdminTableSeeder extends Seeder {

  public function run()
  {
    DB::table('administrators')->delete();

    for ($i=0; $i < 10; $i++) {
      Administrator::create([
        'userid'    => $i,
        'username'  => 'D00'.$i,
        'email'     => 'admin@admin.com',
        'password'  => '123',
        'remark'    => ''
      ]);
    }
  }

}