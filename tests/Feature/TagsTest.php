<?php

namespace Tests\Feature;

use App\Tag;
use App\Post;
use App\Video;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagsTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function a_tag_can_be_created()
    {
        $tag = factory(Tag::class)->create();

        $this->assertDatabaseHas('tags', [
            'name' => $tag->name
        ]);
    }


    /**	@test **/
    public function a_tag_does_know_model_associated_with() {
        

        $post = factory(Post::class)->create();

        $tag = factory(Tag::class)->create();

        $tag->posts()->attach($post->id);

        $this->assertEquals(1, $tag->posts->count());
    }

    /**	@test **/
    public function a_tags_for_videos_can_be_fetched() {
        
        $tag = factory(Tag::class)->create();
        $video = factory(Video::class)->create();

        $tag->videos()->attach($video->id);

        $this->assertCount(1, $tag->videos);
    }


    /**	@test **/
    public function a_post_knows_all_of_its_tags_() {
        
        $tag = factory(Tag::class)->create();

        $post = factory(Post::class)->create();

        $tag->posts()->attach($post->id);

        $this->assertContains($tag->name, $post->tags()->pluck('name'));
    }

    
}
