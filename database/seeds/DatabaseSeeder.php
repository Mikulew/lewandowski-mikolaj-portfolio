<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
//        $this->call(ContactsSeeder::class);
        $this->call(TechnologiesSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CanvasSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(ProjectsSeeder::class);
    }
}
