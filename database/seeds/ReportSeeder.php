<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
          'job_id' => ' 3 ',
          'name' => ' راضى ',
          'report' => ' وظيفه غير موثوق فيها واعتقد ان الناشر يقوم بنشر الكثير من الوظائف ',
          'view' => '0',
          'created_at' => time(),
        ]);
        $this->command->info(' Report publised successfully ');
    }
}
