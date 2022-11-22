<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            'id' => 1,
            'name' => 'Super Admin',
            'type' => 'superadmin',
            'vendor_id' => 0,
            'mobile' => 123456789,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'image' => '',
            'status' => 1,
        ];
        Admin::insert($adminRecords);
    }
}
