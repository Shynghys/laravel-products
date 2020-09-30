<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $invoice = Invoice::all();
        
        return view('invoices.index', compact('invoice'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_number' => 'required',
            'name' => 'required',
            'category' => 'required',
            'invoice_date' => 'nullable',
            'supply_date' => 'nullable',
            'comment' => '',

        ]);
        $invoice = new Invoice([
            'invoice_number' => $request->get('invoice_number'),
            'name' => $request->get('name'),
            'category' => $request->get('category'),
            'invoice_date' => $request->get('invoice_date'),
            'supply_date' => $request->get('supply_date'),
            'comment' => $request->get('comment'),
        ]);
        $invoice->save();

        return redirect('/invoices');
    }

    public function show($id)
    {
        $invoice = Invoice::find($id);

        return view('invoices.show', compact('invoice'));
    }

    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'invoice_number' => 'required',
            'name' => 'required',
            'category' => 'required',
            'invoice_date' => 'nullable',
            'supply_date' => 'nullable',
            'comment' => '',
        ]);

        $invoice = Invoice::find($id);
        $invoice->invoice_number = $request->get('invoice_number');
        $invoice->name = $request->get('name');
        $invoice->category = $request->get('category');
        $invoice->invoice_date = $request->get('invoice_date');
        $invoice->supply_date = $request->get('supply_date');
        $invoice->comment = $request->get('comment');
        $invoice->save();

        return redirect('/invoices')->with('success', 'Invoice edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();

        return redirect('/invoices')->with('success', 'Invoice deleted');
    }
    public function deletePost(request $request)
    {
        $invoice = Invoice::find($request->id)->delete();
        return response()->json();
    }
}
