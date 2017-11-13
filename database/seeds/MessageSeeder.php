<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('messages')->insert([
        'name' => 'محمود راضى ',
        'email' => ' mahmoudrady@gmail.com ',
        'subject' => ' اعجاب ',
        'message' => ' مبروك على الموقع الجديد ومن نجاح لنجاح ',
        'view' => '0',
        'created_at' => time(),
      ]);
      $this->command->info(' Message published successfully ');
    }
}
