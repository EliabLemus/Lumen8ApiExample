<?php

namespace Database\Seeders;

use App\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        // $this->factory(Author::class, 50)->create();
        // $this->call(Author::class,false,[50]);
        Author::factory()
                ->count(50)
                ->create();
    }
}
