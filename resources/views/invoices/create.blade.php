@extends('layouts.app')

@section('content')
@can('create articles')
<div class="container card col-md-8" >
    <form action="/invoices" enctype="multipart/form-data" method="post">
        @csrf

        <div class="">
            <div class="col">

                <div class="pt-3">
                    <h3>Create Invoice</h3>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="col-6">
                        <label for="invoice_number" class="col-form-label">Number</label>
                       
    
                        <input id="invoice_number"
                               type="text"
                               class="form-control{{ $errors->has('invoice_number') ? ' is-invalid' : '' }}"
                               name="invoice_number"
                               value="{{ old('invoice_number') }}"
                               autocomplete="invoice_number" autofocus>
                        
    
                    </div>
                   
                    <div class="col-6">
                        <label for="invoice_date" class="col-form-label">Invoice Date</label>
                        <br>

                        <input id="invoice_date"
                                type="date"
                                class="form-control{{ $errors->has('invoice_date') ? ' is-invalid' : '' }}"
                                name="invoice_date"
                                value="{{ old('invoice_date') }}"
                                autocomplete="invoice_date" autofocus>


                    </div>
                   

                </div>
                <div class="col">

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
                
               
                <div class=" pt-4  pb-4 float-right">
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
