
@extends('layouts.app')

@section('content')
<div class="container" style="border-radius:5px;">
  <div class="h2 pt-2">Invoices</div>
  @can('create articles')
  <div class="card" style=""> 
    <div class="card-body pb-1">Actions</div>
    <div class="card-text mb-3 ml-3 ">
      <a href="{{ route('invoices.create') }}" class="btn btn-primary">
         Add New Invoice
      </a>
    </div>
  </div>
 
  @endcan
  
  {{-- <div id="app">
    <popup></popup>
  </div> --}}
  <div style="overflow-x:auto;" >
    <table
    width="100%"  class="table table-striped mt-3 mr-ml-3 " >
      <div class="h3 ml-3 mt-3">Invoices</div>
        <thead>
        
          <tr>
         
            
            <th scope="col" class="th-sm">Create</th>
            <th scope="col" class="th-sm">Number</th>
            <th scope="col" class="th-sm">Supply</th>
            <th scope="col" class="th-sm">Comment</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
         @foreach($invoice as $invoices)
          <tr>
            
            <td>{{ $invoices->created_at->toDateString() }}</td>
            <td>{{ $invoices->invoice_number }}</th>
            <td>{{ $invoices->supply_date }}</td>
            <td>{{ $invoices->comment }}</td>
            <td class="table-buttons">
              @can('see articles')
              <popup-component invoice-id={{$invoices->id}}></popup-component>
              <a href="{{ route('invoices.show', $invoices) }}" class="btn btn-success">
                <i class="fa fa-eye"></i>
              </a>
              @endcan
           
              @can('edit articles')
              <a href="{{ route('invoices.edit', $invoices) }}" class="btn btn-primary">
                <i class="fa fa-pencil" ></i>
              </a>
              @endcan
              @can('delete articles')
              <form method="POST" action="{{ route('invoices.destroy', $invoices) }}">
               @csrf
               @method('DELETE')
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
              </form>
              @endcan
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
</div>
@endsection
