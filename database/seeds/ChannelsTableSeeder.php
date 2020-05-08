<?php

use Illuminate\Database\Seeder;

use App\Channel;
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
            'name' => 'Laravel 7.0',
            'slug' => Str::slug('Laravel 7.0', '-')
        ]);
        Channel::create([
            'name' => 'React 16.8',
            'slug' => Str::slug('React 16.8', '-')
        ]);
        Channel::create([
            'name' => 'Node 12.0',
            'slug' => Str::slug('Node 12.0', '-')
        ]);
        Channel::create([
            'name' => 'Angular 9.0',
            'slug' => Str::slug('Angular 9.0', '-')
        ]);
        Channel::create([
            'name' => 'PHP 7.0',
            'slug' => Str::slug('PHP 7.0', '-')
        ]);

    }
}
