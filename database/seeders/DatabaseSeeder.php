<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Product::factory(10)->create();
        Category::factory(10)->create();
        Comment::factory(10)->create();
        DB::table('roles')->insert(
            [
                [
                    'name' => 'User',
                ],
                [
                    'name' => 'Admin',
                ],
                [
                    'name' => 'Super admin',
                ],
            ]
        );
    }
}
