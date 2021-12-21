<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Account;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $usermanajer = User::create([
            'email' => 'manajer@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        $akunmanajer = Account::create([
            'name'=> $faker->name('male'),
            'user_id'=> $usermanajer->id,
            'telephone'=>$faker->phoneNumber(),
            'address'=>$faker->address(),
            'role'=> 'manajer'
        ]);

        $userkasir = User::create([
            'email' => 'kasir@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        $akunkasir = Account::create([
            'name'=> $faker->name('female'),
            'user_id'=> $userkasir->id,
            'telephone'=>$faker->phoneNumber(),
            'address'=>$faker->address(),
            'role'=> 'kasir'
        ]);

        for ($i=0; $i <10 ; $i++) { 
            # code...
            $userkasir2 = User::create([
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10)
            ]);
    
            $akunkasir2 = Account::create([
                'name'=> $faker->name('female'),
                'user_id'=> $userkasir2->id,
                'telephone'=>$faker->phoneNumber(),
                'address'=>$faker->address(),
                'role'=> 'kasir'
            ]);
        }
    }
}
