<?php

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jobs')->insert([
        'title' => ' مبرمج مواقع ',
        'company_name' => ' techtalk ',
        'category' => '11',
        'experience' => '1',
        'location' => '11',
        'description' => ' مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم ',
        'email_address' => 'hr@techtalk.com',
        'created_at' => time(),
      ]);
      $this->command->info(' Job published successfully ');
    }
}
