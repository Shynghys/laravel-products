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


  <div style="overflow-x:auto;">
    <table class="col-2 pl-0">
      <tbody>
        <tr>
          <td>
            {{-- <input id="category" class="form-control" name="category"> --}}
            <select id="category" class="form-control" name="category">
              <option name="all" selected>All</option>
              <option name="fruits">Fruits</option>
              <option name="vegetables">Vegetables</option>
              <option name="meat">Meat</option>

            </select>

          </td>
        </tr>
      </tbody>
    </table>

    {{-- <input type="text" id="max" name="max"> --}}
    <table id="example" width="100%" class="table table-striped mt-3 mr-ml-3 ">


      {{-- <div class="h3 ml-3 mt-3">Invoices</div> --}}
      <thead>
        <tr>
          <th scope="col" class="th-sm">Created</th>
          <th scope="col" class="th-sm">Name</th>
          <th scope="col" class="th-sm">Category</th>
          {{-- <th scope="col" class="th-sm"> {{ __('msg.number') }}</th> --}}
          {{-- <th scope="col" class="th-sm"> {{ __('msg.supply_date') }}</th> --}}
          {{-- <th scope="col" class="th-sm"> {{ __('msg.comment') }}</th> --}}
          <th></th>
        </tr>
      </thead>
      <tbody>

        @foreach($invoice as $invoices)
        <tr>

          <td>{{ $invoices->created_at->toDateString() }}</td>
          {{-- <td>{{ $invoices ?? ''->invoice_number }}</td> --}}
          <td>{{ $invoices->name }}</td>
          <td>{{ $invoices->category }}</td>
          {{-- <td>{{ $invoices ?? ''->supply_date }}</td> --}}
          {{-- <td>{{ $invoices ?? ''->comment }}</td> --}}
          <td class="table-buttons">
            @can('see articles')
            {{-- <popup-component invoice-id={{$invoices ?? ''->id}}></popup-component> --}}

            {{-- <a href="#" class="show-modal btn btn-info" data-name="{{$invoices ?? ''->name[0]}}"
            data-invoice_number="{{$invoices ?? ''->invoice_number}}" data-created_at="{{$invoices ?? ''->created_at}}"
            data-comment="{{$invoices ?? ''->comment}}">
            <i class="fa fa-eye"></i>
            </a> --}}
            @can('delete articles')


            <a href="#" class="delete-modal btn btn-danger" data-id="{{$invoices ?? ''->id}}"
              data-invoice_number="{{$invoices ?? ''->invoice_number}}">
              <i class="fa fa-trash"></i>
            </a>
            @endcan
            <a href="{{ route('invoices.show', $invoices ?? '') }}" class="btn btn-success">
              <i class="fa fa-eye"></i>
            </a>
            @endcan

            @can('edit articles')
            <a href="{{ route('invoices.edit', $invoices ?? '') }}" class="btn btn-primary">
              <i class="fa fa-pencil"></i>
            </a>
            @endcan

          </td>
        </tr>


        @endforeach
      </tbody>
    </table>
  </div>

</div>

{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content pt-10">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Number :</label>
          <b id="number">
        </div>
        <div class="form-group">
          <label for="">Name :</label>
          <b id="name">
        </div>
        <div class="form-group">
          <label for="">Created at Date :</label>
          <b id="date">
        </div>
        <div class="form-group">
          <label for="">Comment :</label>
          <b id="comment">
        </div>
      </div>
    </div>
  </div>
</div>
{{-- Modal Form Delete Post --}}
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <div class="deleteContent">
          Are You sure want to delete <span class="invoice_number"></span>?

        </div>
      </div>
      <div class="modal-footer">
        <form method="POST" action="{{ route('invoices.destroy', $invoices ?? '') }}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">
            <div> Delete</div>
          </button>
        </form>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
<script>

</script>