@extends('layouts.app')

@section('content')
@can('create articles')
<div class="container">
    <form action="/invoices" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Create Invoice</h1>
                </div>
                <div class="form-group">
                    <label for="invoice_number" class=" col-form-label">Number</label>

                    <input id="invoice_number"
                           type="text"
                           class="form-control{{ $errors->has('invoice_number') ? ' is-invalid' : '' }}"
                           name="invoice_number"
                           value="{{ old('invoice_number') }}"
                           autocomplete="invoice_number" autofocus>
                    


                   <label for="invoice_date" class="col-form-label">Invoice Date</label>

                    <input id="invoice_date"
                           type="date"
                           class="form-control{{ $errors->has('invoice_date') ? ' is-invalid' : '' }}"
                           name="invoice_date"
                           value="{{ old('invoice_date') }}"
                           autocomplete="invoice_date" autofocus>



                           <label for="supply_date" class="col-form-label">Supply Date</label>

                           <input id="supply_date"
                                  type="date"
                                  class="form-control{{ $errors->has('supply_date') ? ' is-invalid' : '' }}"
                                  name="supply_date"
                                  value="{{ old('supply_date') }}"
                                  autocomplete="supply_date" autofocus>

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
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>
                
           
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Invoice</button>
                </div>

            </div>
        </div>
    </form>
</div>
@else
    <div>You don't have permission</div>
@endcan
@endsection
