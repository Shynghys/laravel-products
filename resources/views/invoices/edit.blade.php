@extends('layouts.app')

@section('title','adsdad')

@section('content')
@can('edit articles')

<div class="container" style="border-radius:5px;">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('invoices.update', $invoice) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="invoice_number" class=" col-form-label">Number</label>

                    <input id="invoice_number" type="text"
                        class="form-control{{ $errors->has('invoice_number') ? ' is-invalid' : '' }}"
                        name="invoice_number" value="{{ old('invoice_number') ?? $invoice->invoice_number }}"
                        autocomplete="invoice_number" autofocus>


                    <label for="name" class=" col-form-label">Name</label>

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" value="{{ old('name') ?? $invoice->name }}" autocomplete="name" autofocus>


                    <label for="category" class="col-form-label">Category</label>
                    <br>
                    <select id="category" type="date"
                        class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category"
                        value="{{ old('category') }}" autocomplete="category" autofocus>
                        <option name="fruits">Fruits</option>
                        <option name="vegetables">Vegetables</option>
                        <option name="meat">Meat</option>

                    </select>
                    <label for="invoice_date" class="col-form-label">Invoice Date</label>

                    <input id="invoice_date" type="date"
                        class="form-control{{ $errors->has('invoice_date') ? ' is-invalid' : '' }}" name="invoice_date"
                        value="{{ old('invoice_date') ?? $invoice->invoice_date }}" autocomplete="invoice_date"
                        autofocus>



                    <label for="supply_date" class="col-form-label">Supply Date</label>

                    <input id="supply_date" type="date"
                        class="form-control{{ $errors->has('supply_date') ? ' is-invalid' : '' }}" name="supply_date"
                        value="{{ old('supply_date') ?? $invoice->supply_date }}" autocomplete="supply_date" autofocus>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <label for="comment" class=" col-form-label">Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"
                        value="{{ old('comment') ?? $invoice->comment }}"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Edit invoice</button>
            </form>
        </div>
    </div>
</div>
@else
<div>You don't have permission</div>
@endcan
@endsection