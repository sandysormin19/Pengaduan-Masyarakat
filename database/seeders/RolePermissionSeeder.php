<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    private $permissions = [
        'dashboard'=> [
            'view',
        ],
        'user' => [
            'view',
            'create',
            'edit',
            'delete',
        ],
        'resident' => [
            'view',
            'create',
            'edit',
            'delete',
        ],
        'report' => [
            'view',
            'create',
            'edit',
            'delete',
        ],
        'report_category' => [
            'view',
            'create',
            'edit',
            'delete',
        ],
        'report_status' => [
            'view',
            'create',
            'edit',
            'delete',
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       foreach ($this->permissions as $key => $value){
        foreach($value as $permission){
            Permission::first0Create([
                'name' => $key . '_' . $permission,

            ]);
    }
}

Role::firstOrCreate{[
    'name' => 'admin',
    'guard_name' => 'web',
]}->givePermissionTo(Permission::all());
         Role::firstOrCreate([
                'name' => 'resident',
                'guard_name' => 'web',
          ])->givePermissionTo([
                'dashboard_view',
                'report_view',
                'report_create',
                'report_edit',
                'report_delete',

                'report-status_view',
          ]);
    }
}
