<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FirstTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'SD BASIC 1',
            'slug' => Str::of('SD BASIC 1')->slug('-'),
        ])->users()->attach(User::find(1));
        Team::create([
            'name' => 'SD BASIC 2',
            'slug' => Str::of('SD BASIC 2')->slug('-'),
        ])->users()->attach(User::find(1));
        Team::create([
            'name' => 'SMP BASIC 1',
            'slug' => Str::of('SD BASIC 1')->slug('-'),
        ])->users()->attach(User::find(1));
        Team::create([
            'name' => 'SMP BASIC 2',
            'slug' => Str::of('SD BASIC 2')->slug('-'),
        ])->users()->attach(User::find(1));
        Team::create([
            'name' => 'SMA BASIC 1',
            'slug' => Str::of('SD BASIC 1')->slug('-'),
        ])->users()->attach(User::find(1));
        Team::create([
            'name' => 'SMA BASIC 2',
            'slug' => Str::of('SD BASIC 2')->slug('-'),
        ])->users()->attach(User::find(1));
    }
}
