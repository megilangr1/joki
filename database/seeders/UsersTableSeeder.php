<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'MeGGi',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin123'),
                'is_admin' => true
            ]
        ];

        DB::beginTransaction();
        try {
            foreach ($data as $key => $value) {
                $check = User::where('email', '=', $value['email'])->first();
                if (!$check) User::firstOrCreate($value);
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }
}
