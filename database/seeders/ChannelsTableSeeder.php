<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'title' => 'Laravel 8',
            'slug' => Str::slug('Laravel 8','-') 
        ]);

        Channel::create([
            'title' => 'Vue js',
            'slug' => Str::slug('Vue js','-') 
        ]);

        Channel::create([
            'title' => 'Angular',
            'slug' => Str::slug('Angular','-') 
        ]);

        Channel::create([
            'title' => 'Node js',
            'slug' => Str::slug('Node js','-') 
        ]);
    }
}
