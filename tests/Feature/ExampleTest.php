<?php
 use Tests\TestCase;
 use Illuminate\Foundation\Testing\WithFaker;
 use Illuminate\Foundation\Testing\RefreshDatabase;
class ExampleTest extends TestCase
{
    // use WithoutMiddleware;
    // use HasFactory;
    /**
     * A basic test example.
     *
     * @return void
     */

   
            // public function testCreateInvoice()
        // {
            // $user = User::find(1);
            // $response = $this->user->login()->get('/invoices/create');

        //     $response->assertStatus(200);
        // }
    public function testExample()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
    }


  
    public function testBasicExample()
    {
        $response = $this->withHeaders([
            'name' => 'Value',
        ])->json('POST', '/invoices', ['name' => 'Sally']);

        $response
            ->assertStatus(401);
    }
    public function testCreateProductWithMiddleware()
    {
        $user   = factory(\App\User::class)->create();
            $data = [
                'invoice_number'=>'inv-300004',
                'name' => 'Onion',
                'category'=>'Vegetables',
                'invoice_date'=>'2018-09-28 12:42:30',
                'supply_date'=>'2019-09-28 12:42:30',
                'created_at'=>'2018-09-28 12:42:30',
                'updated_at'=>'2019-09-28 12:42:30', ];

                $response = $this->actingAs($user, 'api')->json('POST', '/invoices',$data);
        // $response = $this->json('POST', '/invoices',$data);
            $response->assertStatus(302);
        // $response->assertJson(['message' => "Found."]);
    }
    public function testGetAllOrders()
    {
            $this->withoutMiddleware();
            $user             = factory(\App\User::class)->create();
            $response         = $this->actingAs($user, 'api')->json('GET', '/invoices');
            $response->assertStatus(200);
            print( response()->json());
            response()->json([
                'name' => 'Abigail',
                'state' => 'CA',
            ]);
            // $response->assertJsonStructure(
            //         ['status',
            //         'message',
            //         'data'=>
            //                 [
            //                         'id',
            //                         'invoice_number',
            //                         'name',
            //                         'comment',
            //                         'invoice_date',
            //                         'supply_date',
            //                         'created_at',
            //                         'updated_at'
            //                 ]
            //         ]
            //     );
        }
    public function testGettingAllProducts()
    {     
            $user   = factory(\App\User::class)->create();
            $response = $this->actingAs($user, 'api')->json('GET', '/invoices');
            $response->assertStatus(200);
            // $response = $this->json('GET', '/invoices');
            // $response->assertStatus(401);

            // $response->assertJsonStructure(
            //     [
            //         [
            //                 'id',
            //                 'name',
            //                 'description',       
            //                 'created_at',
            //                 'updated_at'
            //         ]
            //     ]
            // );
        }
        // public function testUpdateProduct()
        // {
        //         $response = $this->json('GET', '/api/products');
        //         $response->assertStatus(200);
    
        //         $product = $response->getData()[0];
    
        //         $user = factory(\App\User::class)->create();
        //         $update = $this->actingAs($user, 'api')->json('PATCH', '/api/products/'.$product->id,['name' => "Changed for test"]);
        //         $update->assertStatus(200);
        //         $update->assertJson(['message' => "Product Updated!"]);
        //     } 
    // public function testCreateProduct()
    // {
    //    $data = [
    //         'invoice_number'=>'inv-300004',
    //         'name' => 'Onion',
    //         'category'=>'Vegetables',
    //         'invoice_date'=>'2018-09-28 12:42:30',
    //         'supply_date'=>'2019-09-28 12:42:30',
    //         'created_at'=>'2018-09-28 12:42:30',
    //         'updated_at'=>'2019-09-28 12:42:30', 
    //         ];
    //         $invoice = Invoice::factory()->make();
    //         $response = $this->actingAs($invoice, 'api')->json('POST', '/invoices/create',$data);
    //         $response->assertStatus(200);
    //         $response->assertJson(['status' => true]);
    //         $response->assertJson(['message' => "Product Created!"]);
    //         $response->assertJson(['data' => $data]);
    //   }
}
