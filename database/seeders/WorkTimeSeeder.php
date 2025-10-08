<?php

namespace Database\Seeders;

use App\Models\WorkTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
               $workTimes = [
            ['date'=>'2025-10-05','hours'=>2,'emp_id'=>3,'project_id'=>2,'modul_id'=>1],
            ['date'=>'2025-10-05','hours'=>3,'emp_id'=>3,'project_id'=>3,'modul_id'=>4],
            ['date'=>'2025-10-05','hours'=>2,'emp_id'=>3,'project_id'=>2,'modul_id'=>1],
            ['date'=>'2025-10-05','hours'=>3,'emp_id'=>3,'project_id'=>3,'modul_id'=>4],
            ['date'=>'2025-10-01','hours'=>4.5,'emp_id'=>1,'project_id'=>2,'modul_id'=>3],
            ['date'=>'2025-10-01','hours'=>7,'emp_id'=>2,'project_id'=>1,'modul_id'=>4],
            ['date'=>'2025-10-02','hours'=>6.2,'emp_id'=>3,'project_id'=>3,'modul_id'=>2],
            ['date'=>'2025-10-02','hours'=>3.8,'emp_id'=>4,'project_id'=>2,'modul_id'=>1],
            ['date'=>'2025-10-03','hours'=>5.7,'emp_id'=>5,'project_id'=>4,'modul_id'=>2],
            ['date'=>'2025-10-03','hours'=>2,'emp_id'=>1,'project_id'=>3,'modul_id'=>1],
            ['date'=>'2025-10-04','hours'=>8,'emp_id'=>2,'project_id'=>2,'modul_id'=>4],
            ['date'=>'2025-10-04','hours'=>4.2,'emp_id'=>3,'project_id'=>1,'modul_id'=>3],
            ['date'=>'2025-10-05','hours'=>6.5,'emp_id'=>4,'project_id'=>4,'modul_id'=>2],
            ['date'=>'2025-10-05','hours'=>1.5,'emp_id'=>5,'project_id'=>2,'modul_id'=>3],
            ['date'=>'2025-10-06','hours'=>7.8,'emp_id'=>1,'project_id'=>1,'modul_id'=>4],
            ['date'=>'2025-10-06','hours'=>5,'emp_id'=>2,'project_id'=>4,'modul_id'=>2],
            ['date'=>'2025-10-07','hours'=>3.3,'emp_id'=>3,'project_id'=>2,'modul_id'=>1],
            ['date'=>'2025-10-07','hours'=>8,'emp_id'=>4,'project_id'=>3,'modul_id'=>3],
            ['date'=>'2025-10-08','hours'=>2.7,'emp_id'=>5,'project_id'=>1,'modul_id'=>2],
            ['date'=>'2025-10-08','hours'=>6.9,'emp_id'=>1,'project_id'=>4,'modul_id'=>3],
            ['date'=>'2025-10-09','hours'=>4,'emp_id'=>2,'project_id'=>2,'modul_id'=>1],
            ['date'=>'2025-10-09','hours'=>7.5,'emp_id'=>3,'project_id'=>3,'modul_id'=>4],
            ['date'=>'2025-10-10','hours'=>1.8,'emp_id'=>4,'project_id'=>1,'modul_id'=>2],
            ['date'=>'2025-10-10','hours'=>5.6,'emp_id'=>5,'project_id'=>4,'modul_id'=>1],
            ['date'=>'2025-10-11','hours'=>3.5,'emp_id'=>1,'project_id'=>3,'modul_id'=>2],
            ['date'=>'2025-10-11','hours'=>7.9,'emp_id'=>2,'project_id'=>4,'modul_id'=>1],
            ['date'=>'2025-10-12','hours'=>6,'emp_id'=>3,'project_id'=>2,'modul_id'=>4],
            ['date'=>'2025-10-12','hours'=>2.4,'emp_id'=>4,'project_id'=>1,'modul_id'=>3],
            ['date'=>'2025-10-12','hours'=>8,'emp_id'=>5,'project_id'=>3,'modul_id'=>2],
            ['date'=>'2025-10-13','hours'=>5.1,'emp_id'=>1,'project_id'=>2,'modul_id'=>4],
            ['date'=>'2025-10-13','hours'=>1.9,'emp_id'=>2,'project_id'=>3,'modul_id'=>2],
            ['date'=>'2025-10-14','hours'=>6.7,'emp_id'=>3,'project_id'=>4,'modul_id'=>1],
            ['date'=>'2025-10-14','hours'=>4.3,'emp_id'=>4,'project_id'=>2,'modul_id'=>3],
            ['date'=>'2025-10-14','hours'=>7.2,'emp_id'=>5,'project_id'=>1,'modul_id'=>4],
            ['date'=>'2025-10-15','hours'=>2.5,'emp_id'=>1,'project_id'=>4,'modul_id'=>2],
            ['date'=>'2025-10-15','hours'=>3.9,'emp_id'=>2,'project_id'=>2,'modul_id'=>3],
            ['date'=>'2025-10-16','hours'=>8,'emp_id'=>3,'project_id'=>1,'modul_id'=>1],
            ['date'=>'2025-10-16','hours'=>5.4,'emp_id'=>4,'project_id'=>3,'modul_id'=>4],
            ['date'=>'2025-10-16','hours'=>6.8,'emp_id'=>5,'project_id'=>4,'modul_id'=>2],
            ['date'=>'2025-10-17','hours'=>1.7,'emp_id'=>1,'project_id'=>1,'modul_id'=>3],
            ['date'=>'2025-10-17','hours'=>7.4,'emp_id'=>2,'project_id'=>3,'modul_id'=>4],
            ['date'=>'2025-10-18','hours'=>3,'emp_id'=>3,'project_id'=>2,'modul_id'=>2],
            ['date'=>'2025-10-18','hours'=>6.2,'emp_id'=>4,'project_id'=>1,'modul_id'=>4],
            ['date'=>'2025-10-18','hours'=>4.6,'emp_id'=>5,'project_id'=>2,'modul_id'=>1],
            ['date'=>'2025-10-19','hours'=>7.8,'emp_id'=>1,'project_id'=>3,'modul_id'=>2],
            ['date'=>'2025-10-19','hours'=>2.1,'emp_id'=>2,'project_id'=>4,'modul_id'=>3],
            ['date'=>'2025-10-20','hours'=>5.9,'emp_id'=>3,'project_id'=>2,'modul_id'=>4],
            ['date'=>'2025-10-20','hours'=>3.2,'emp_id'=>4,'project_id'=>1,'modul_id'=>2],
            ['date'=>'2025-10-20','hours'=>8,'emp_id'=>5,'project_id'=>3,'modul_id'=>1],
            ['date'=>'2025-10-21','hours'=>6.6,'emp_id'=>1,'project_id'=>4,'modul_id'=>2],
            ['date'=>'2025-10-21','hours'=>4,'emp_id'=>2,'project_id'=>2,'modul_id'=>4],
            ['date'=>'2025-10-22','hours'=>7.3,'emp_id'=>3,'project_id'=>1,'modul_id'=>3],
            ['date'=>'2025-10-22','hours'=>2.8,'emp_id'=>4,'project_id'=>3,'modul_id'=>2],
            ['date'=>'2025-10-22','hours'=>5,'emp_id'=>5,'project_id'=>4,'modul_id'=>4],
        ];

        foreach ($workTimes as $wt) {
            WorkTime::create($wt);
        }
    }
}
