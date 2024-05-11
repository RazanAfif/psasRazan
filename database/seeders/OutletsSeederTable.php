<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Outlet;

class OutletsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create([
            'code' => Str::random(),
            'name' => 'Razan',
            'status' => 'selesai',
            'address' => 'London',
            'phone' => '081523546786',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Zaka',
            'status' => 'Berlangsung',
            'address' => 'Amerika',
            'phone' => '089084515633',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Agi',
            'status' => 'selesai',
            'address' => 'Arab',
            'phone' => '0811923235432',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Rapier',
            'status' => 'berlangsung',
            'address' => 'Afrika',
            'phone' => '0898675352078',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Ajazz',
            'status' => 'selesai',
            'address' => 'Tokyo',
            'phone' => '086775367928',
        ]);
    }
}