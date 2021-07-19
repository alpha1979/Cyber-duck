<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
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
       $this->call(UserSeeder::class);
       $companies = Company::factory()->count(20)->create();
       $employees = Employee::factory()
                            ->count(30)
                            ->make()
                            ->each(function($employee) use($companies){
                                $employee->company_id = $companies->random()->id;
                                $employee->save();
                            });
        
    }
}