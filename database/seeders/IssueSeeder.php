<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Issue;
use App\Models\Tag;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Issue::factory()->times(30)->create();

        foreach (Issue::all() as $issue) {
            $tags = Tag::inRandomOrder()->take(rand(1,3))->pluck('id');
            $issue->tags()->attach($tags);
        }

        //Issue::factory(30)->create();
    }
}
