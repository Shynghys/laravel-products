@extends('layouts.app')

@section('title')
@endsection
@section('content')
<div class="container card col-md-8    align-items-center">

    <div class=" card-body ">
        <h3>Number: {{ $invoice->invoice_number }}</h3>
        <h5>Name: {{ $invoice->name }}</h3>
            <p>Category: {{ $invoice->category }}</p>
            <p>Invoice Date: {{ $invoice->invoice_date }}</p>
            <p>Supply Date: {{ $invoice->supply_date }}</p>
            <p>Comment: {{ $invoice->comment }}</p>
    </div>

</div>



@endsection