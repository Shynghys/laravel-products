<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('invoices')->insert([
            'invoice_number'=>'inv-300000',
            'name' => 'Banan',
            'category'=>'Fruits',
            'invoice_date'=>'2010-09-28 12:42:30',
            'supply_date'=>'2011-09-28 12:42:30',
            'created_at'=>'2010-09-28 12:42:30',
            'updated_at'=>'2011-09-28 12:42:30',
        ]);
        DB::table('invoices')->insert([
            'invoice_number'=>'inv-300001',
            'name' => 'Apple',
            'category'=>'Fruits',
            'invoice_date'=>'2012-09-28 12:42:30',
            'supply_date'=>'2013-09-28 12:42:30',
            'created_at'=>'2012-09-28 12:42:30',
            'updated_at'=>'2013-09-28 12:42:30',
        ]);
        DB::table('invoices')->insert([
            'invoice_number'=>'inv-300002',
            'name' => 'Chiken',
            'category'=>'Meat',
            'invoice_date'=>'2014-09-28 12:42:30',
            'supply_date'=>'2015-09-28 12:42:30',
            'created_at'=>'2014-09-28 12:42:30',
            'updated_at'=>'2015-09-28 12:42:30',
        ]);
        DB::table('invoices')->insert([
            'invoice_number'=>'inv-300003',
            'name' => 'Potato',
            'category'=>'Vegetables',
            'invoice_date'=>'2016-09-28 12:42:30',
            'supply_date'=>'2017-09-28 12:42:30',
            'created_at'=>'2016-09-28 12:42:30',
            'updated_at'=>'2017-09-28 12:42:30',
        ]);
        DB::table('invoices')->insert([
            'invoice_number'=>'inv-300004',
            'name' => 'Onion',
            'category'=>'Vegetables',
            'invoice_date'=>'2018-09-28 12:42:30',
            'supply_date'=>'2019-09-28 12:42:30',
            'created_at'=>'2018-09-28 12:42:30',
            'updated_at'=>'2019-09-28 12:42:30',
        ]);
    }
}
