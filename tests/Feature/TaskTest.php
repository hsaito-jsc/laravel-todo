<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;
use App\Http\Requests\CreateTask;

class TaskTest extends TestCase
{

	use RefreshDatabase;
	
	public function setUp(): void
	{
		parent::setUp();
		$this->seed('FoldersTableSeeder');
	}
	
	/** @test */
    public function due_date_should_be_date()
    {
        $response = $this->post('/folders/1/tasks/create', [
			'title' => 'Sample task',
			'due_date' => 123,
		]);

        $response->assertSessionHasErrors('due_date');
    }
	
	/** @test */
	public function due_date_should_be_past()
    {
        $response = $this->post('/folders/1/tasks/create', [
			'title' => 'Sample task',
			'due_date' => Carbon::yesterday()->format('Y/m/d'),
		]);
		
        $response->assertSessionHasErrors('due_date');
    }
	
	/** @test */
	public function status_should_be_within_defined_numbers()
	{
		$this->seed('TaskTableSeeder');
		$response = $this->post('/folders/1/tasks/1/edit', [
			'title' => 'Sample Task',
			'due_date' => Carbon::today()->format('Y/m/d'),
			'status' => 999,
		]);
		
		$response->assertSessionHasErrors('status');
	}
}
