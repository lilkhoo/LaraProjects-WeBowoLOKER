<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Listing::factory(5)->create();

        // Listing::create([
        //     "title" => "Laravel Senior Developer",
        //     "tags" => "Laravel, Javascript",
        //     "company" => "Acme Corp",
        //     "location" => "Jakarta, Indonesia",
        //     "email" => "acmecorp@gmail.com",
        //     "website" => "https://www.acme.com",
        //     "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint sed voluptatem error aliquid illum recusandae sapiente, expedita rerum deleniti magni amet atque at, a totam aliquam adipisci similique minima. Exercitationem facilis, eveniet tenetur tempora nesciunt consequuntur. Quod repellendus accusantium facere explicabo ex veritatis, odio neque soluta, laudantium molestias commodi aut."
        // ]);

        // Listing::create([
        //     "title" => "BackEnd Junior Developer",
        //     "tags" => "Laravel, PHP",
        //     "company" => "WeBowo Group",
        //     "location" => "Jakarta, Indonesia",
        //     "email" => "webowomaterials@gmail.com",
        //     "website" => "https://www.acme.com",
        //     "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint sed voluptatem error aliquid illum recusandae sapiente, expedita rerum deleniti magni amet atque at, a totam aliquam adipisci similique minima. Exercitationem facilis, eveniet tenetur tempora nesciunt consequuntur. Quod repellendus accusantium facere explicabo ex veritatis, odio neque soluta, laudantium molestias commodi aut."
        // ]);

        // Listing::create([
        //     "title" => "FullStack Developer",
        //     "tags" => "Laravel, PHP",
        //     "company" => "WeBowo Group",
        //     "location" => "Jakarta, Indonesia",
        //     "email" => "webowomaterials@gmail.com",
        //     "website" => "https://www.acme.com",
        //     "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint sed voluptatem error aliquid illum recusandae sapiente, expedita rerum deleniti magni amet atque at, a totam aliquam adipisci similique minima. Exercitationem facilis, eveniet tenetur tempora nesciunt consequuntur. Quod repellendus accusantium facere explicabo ex veritatis, odio neque soluta, laudantium molestias commodi aut."
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
