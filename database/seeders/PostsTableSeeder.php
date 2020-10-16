<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //categories
        $category1 = Category::create([
            'name' => 'Jobs'
        ]);

        $category2 = Category::create([
            'name' => 'Scholarships'
        ]);

        $category3 = Category::create([
            'name' => 'Competitions'
        ]);

        $category4 = Category::create([
            'name' => 'Fellowships'
        ]);

        $category4 = Category::create([
            'name' => 'Business'
        ]);

        //authors or users
        $author = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('password')
        ]);

        //tags
        $tag1 = Tag::create([
            'name' => 'Opportunity'
        ]);

        $tag2 = Tag::create([
            'name' => 'Traing & Development'
        ]);

        $tag3 = Tag::create([
            'name' => 'Personal Development'
        ]);

        //posts
        $post1 = Post::create([
            'title' => 'New published books to read by a product designer',
            'description' => 'Worthy all math at of they these a to beings think and she in he I to off poetic not these little of big and one eminent should, sides behave. Readers the that her supplies such didn\'t on allpowerful shall we pass he a one shall in evening of then into and they\'re lively. A he ruining positives didn\'t the your brief the is alone motivator, housed hell at tone in being for in I has absolutely about she any head select lane.',
            'content' => '
                Distant I rationale real in text, was chest the and copy pouring death, curiously, to once turned they place his that trying. At harmonics; Quite to understood. Is she to at the her deceleration to and the better of and funds together structure to object them. Fresh what and gain, around him created, hope which a associate the game, I turned that drawers. Little ever prepared themselves my well and lieutenantgeneral late, client the of get the client her it the where and he and that lazy by these one for very over cannot to and left declined, and makers.
                A then low win variety own this every real all the salesman be I don\'t thin it if bed in anchors slowly he you have I young picture same the your own absolutely question everyday. But time harmonics; Was play infinity, how clarinet misleads appearance, my city both brilliant. Wasn\'t curiously, than psychological if himself in the and blind bathroom spirit, no gone in tones to me, than it partiality had anyone but in how country, global instead and it freshlybrewed way.
                ',
            'category_id' => $category4->id,
            'image' => 'posts/ph_22642_82124.jpg',
            'link' => 'https://localdomains.uk.com',
            'user_id' => $author->id
        ]);
    }
}
