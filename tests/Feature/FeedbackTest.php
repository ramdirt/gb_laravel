<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeedbackTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view()
    {
        $response = $this->get('/feedback/create');

        $response->assertStatus(200);
    }


    public function test_feedback_save_file()
    {
        $data = [
            'name' => 'aleksey',
            'feedback' => 'feedback'
        ];
        $response = $this->post(route('feedback.store'), $data);

        Storage::disk('local')->assertExists('feedback.txt');
    }

    public function test_file_contains_content()
    {
        $content = Storage::get('feedback.txt');

        $this->assertEquals($content, "aleksey feedback");
    }
}