<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *     User::create([
            'name' => 'Muhammad Farhan Novian',
            'email' => 'inside.suck@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Julia Maya Tsaqila',
            'email' => 'julia2004@yahoo.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'David Chloe',
            'email' => 'chloes@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Novian Zen ',
            'email' => 'farhankeepsmile@yahoo.com',
            'password' => Hash::make('password')
        ]);

     * @return void
     */
    public function run()
    {

        User::factory(5)->create();
        $this->call([
            CategorySeeder::class,
        ]);

        Post::factory(20)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
