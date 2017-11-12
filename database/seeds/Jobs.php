<?php

use Illuminate\Database\Seeder;

class Jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
          'title' => 'مبرمج مواقع',
          'company_name' => 'tech talk',
          'category' => '1',
          'experience' => '1',
          'location' => '1',
          'description' => 'مطلوب مبرمج مواقع ذو خبره فى لارفيل ويجيد التعامل مع متطلبات التصميم',
          'email_address' => 'hr@techtalk.com',
          'created_at' => time(),
        ]);
        $this->command->info(' Job published successfully ');
    }
}
