@extends('layouts.app')

@section('title')

@section('content')

<div class="card">
    <div class="card-body">
        <h3>{{ $invoice->invoice_number }}</h3>
            <p>{{ $invoice->invoice_date }}</p>
            <p>{{ $invoice->supply_date }}</p>
            <p>{{ $invoice->comment }}</p>
    </div>
</div>


@endsection