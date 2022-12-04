<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Mapel;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lana',
            'email' => 'lana@gmail.com',
            'slug' => 'administrator',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Nizar',
            'email' => 'nizar@gmail.com',
            'slug' => 'creator-2',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Ariel',
            'email' => 'ariel@gmail.com',
            'slug' => 'creator-1',
            'password' => bcrypt('password'),

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Mapel::create([
            'name' => 'Informatika',
            'slug' => 'mapel-informatika'
        ]);
        Mapel::create([
            'name' => 'Jardas',
            'slug' => 'mapel-jaringan-dasar'
        ]);
        Mapel::create([
            'name' => 'Perkom',
            'slug' => 'mapel-perakitan'
        ]);
        // Post::factory(5)->create();

        Post::create([
            'title' => 'Bakso Lamongan',
            'mapel_id' => 1,
            'user_id' => 1,
            'slug' => 'bakso-lamongan',
            'excerpt' => 'Siapa yang tak kenal dengan bakso malang? Makanan yang sering kali terdengar dan lewat depan rumah kalian bukan? Bakso malang identik dengan pangsitnya yang membuat bakso ini memiliki berbagai macam tekstur.',
            'body' => '<p>Siapa yang tak kenal dengan bakso malang? Makanan yang sering kali terdengar dan lewat depan rumah kalian bukan? Bakso malang identik dengan pangsitnya yang membuat bakso ini memiliki berbagai macam tekstur.</p><P>Makanan khas Jawa Timur yang wajib kamu coba yang pastinya bikin kamu ketagihan. Pada umumnya, bakso malang disajikan dengan kuah yang hangat, gurih, dengan isian yang komplit.</p> <P>Biasanya isinya ada bakso, tahu putih atau coklat, bakso aci, juga toping mie, bihun, dan sayuran. Bakso malang ini mencantumkan kata "malang" di dalam namanya karena memang asal dari bakso ini dari Malang.</p><p>Apakah kamu pernah mencicipi bakso malang langsung dari kota asalnya, Malang?</p>'
        ]);

        Post::create([
            'title' => 'Lontong Balap',
            'mapel_id' => 1,
            'user_id' => 2,
            'slug' => 'lontong-balap' ,
            'excerpt' => 'Makanan khas Jawa Timur selanjutnya lontong balap. Kuliner lontong balap ini rasanya semakin dahsyat dengan tambahan tahu goreng, kecap, tauge, dan kuah gurih.',
            'body' => '<p>Makanan khas Jawa Timur selanjutnya lontong balap. Kuliner lontong balap ini rasanya semakin dahsyat dengan tambahan tahu goreng, kecap, tauge, dan kuah gurih.</p> <P>Sebagai pelengkap, lontong balap biasa disantap bersama lentho. Gorengan yang terbuat dari kacang tolo. Lontong balap dikenal dengan kaya rasa karena di setiap suapan akan ada rasa gurih, pedas, dan manis yang memanjakan lidah.</p>'
        ]);

        Post::create([
            'title' => 'Soto',
            'mapel_id' => 1,
            'user_id' => 1,
            'slug' => 'soto' ,
            'excerpt' => 'Makanan khas Jawa Timur selanjutnya lontong balap. Kuliner lontong balap ini rasanya semakin dahsyat dengan tambahan tahu goreng, kecap, tauge, dan kuah gurih.',
            'body' => '<p>Makanan khas Jawa Timur selanjutnya lontong balap. Kuliner lontong balap ini rasanya semakin dahsyat dengan tambahan tahu goreng, kecap, tauge, dan kuah gurih.</p> <P>Sebagai pelengkap, lontong balap biasa disantap bersama lentho. Gorengan yang terbuat dari kacang tolo. Lontong balap dikenal dengan kaya rasa karena di setiap suapan akan ada rasa gurih, pedas, dan manis yang memanjakan lidah.</p>'
        ]);
    }
}
