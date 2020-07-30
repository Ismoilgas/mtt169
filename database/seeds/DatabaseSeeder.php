<?php

use Illuminate\Database\Seeder;
use App\Models\Staf;
use App\Models\User;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => str_random(10),
            ]
        );
        
        Image::create(
            [
                'image' => 'img_1.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_2.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_3.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_4.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_5.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_6.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_7.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_8.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_9.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_10.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_11.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_12.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_13.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_14.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_15.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_16.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_17.jpg',
            ]
        );

        Image::create(
            [
                'image' => 'img_18.jpg',
            ]
        );

        Staf::create(
            [
                'name' => 'Abdullayeva',
                'position' => 'Mudira',
                'image' => 'person_2.jpg',
            ]
        );

        Staf::create(
            [
                'name' => 'Davlatova',
                'position' => 'Tarbiyachi',
                'image' => 'person_2.jpg',
            ]
        );

        Staf::create(
            [
                'name' => 'Erkinova',
                'position' => 'Tarbiyachi',
                'image' => 'person_2.jpg',
            ]
        );

        Staf::create(
            [
                'name' => 'Olimova',
                'position' => 'Tarbiyachi',
                'image' => 'person_2.jpg',
            ]
        );

    }
}
