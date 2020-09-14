@extends('layouts.app')

@section('content')
<div class="container">
  @can('create articles')
  <a href="{{ route('invoices.create') }}" class="btn btn-success">
    <i class="fa fa-eye"></i> Add New Invoice
  </a>
  @endcan
    <table class="table table-striped mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">invoice_date</th>
            <th scope="col">supply_date</th>
            <th scope="col">comment</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
         @foreach($invoice as $invoices)
          <tr>
            <th scope="row">{{ $invoices->invoice_number }}</th>
            <td>{{ $invoices->invoice_date }}</td>
            <td>{{ $invoices->supply_date }}</td>
            <td>{{ $invoices->comment }}</td>
            <td class="table-buttons">
              @can('see articles')
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
@endsection
