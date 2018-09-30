@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable
          <a href="{{ route('user.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create User"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  
              </tbody>
              <tfoot>
                  <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th></th>
                  </tr>
              </tfoot>
          </table>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.user') }}",
            columns: [
                {data: 'DT_Row_Index', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
@endpush