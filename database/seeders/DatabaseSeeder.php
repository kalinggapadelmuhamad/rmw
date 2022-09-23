<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Role::factory(2)->create();
        \App\Models\Company::factory(2)->create();
        \App\Models\Departement::factory(2)->create();
        \App\Models\DepartementMember::factory(2)->create();
        \App\Models\RoleMember::factory(2)->create();
        \App\Models\GroupMember::factory(2)->create();
        \App\Models\CompanyGroup::factory(2)->create();
        \App\Models\CompanyMember::factory(2)->create();
        \App\Models\UserGroup::factory(2)->create();
    }
}
