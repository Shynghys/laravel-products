<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    // public function setUp()
    // {
    //     parent::setUp();
    //     $this->rules     = (new UserStoreRequest())->rules();
    //     $this->validator = $this->app['validator'];
    // }
    protected function validateField($field, $value)
    {
        return $this->getFieldValidator($field, $value)->passes();
    }
    protected function getFieldValidator($field, $value)
    {
        return $this->validator->make(
            [$field => $value],
            [$field => $this->rules[$field]]
        );
    }
    public function valid_first_name()
    {
        $this->assertTrue($this->validateField('username', 'jon'));
        $this->assertTrue($this->validateField('username', 'jo'));
        $this->assertFalse($this->validateField('username', 'j'));
        $this->assertFalse($this->validateField('username', ''));
        $this->assertFalse($this->validateField('username', '1'));
        $this->assertFalse($this->validateField('username', 'jon1'));
    }
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testCreateInvoice()
    {
        $response = $this->get('/invoices/create');

        $response->assertStatus(200);
    }

    public function testApplication()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/');
    }
}
