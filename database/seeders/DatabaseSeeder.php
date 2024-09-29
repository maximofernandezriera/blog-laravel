<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);

        Category::factory(2)->create();
    
        $AdminUser = new User();
        $AdminUser->name = "admin";
        $AdminUser->email = "admin@example.com";
        $AdminUser->role = "role";
        $AdminUser->password = Hash::make('password');
        $AdminUser->save();
        

        User::factory(2)->create();

        Post::factory(2)->create();

    }
}
