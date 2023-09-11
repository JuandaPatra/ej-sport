@extends('admin.layouts.dashboard')
@section('title')
@php
$postId = last(request()->segments());
@endphp
@endsection

@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="d-flex justify-content-between">

        <h5 class="card-header">Users</h5>

    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($datas as $row)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td><strong>{{ $row->name }}</strong></td>
                    <td>{{$row->email}}</td>
                    <td>
                        <form action="{{ route('users.destroy', ['user'=>$row->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <!-- <a class="dropdown-item"  , role="alert" alert-text="{{ $row->comments }}" onclick="this.closest('form').submit();return false;">
                                <i class="bx bx-trash me-1"></i>Delete
                            </a> -->
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'> <i class="bx bx-trash me-1"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


<!--/ Basic Bootstrap Table -->
@endsection
@push('javascript-internal')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {

        $('.exit').on('click', function() {
            $('#modalCenter').removeClass('show')
        })

        $('.showModal').on('click', function() {
            $('#modalCenter').addClass('show')
        })



        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });



        // event delete category
        $("form[role='alert']").submit(function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Apakah anda ingin menghapus ?",
                text: $(this).attr('alert-text'),
                icon: 'warning',
                allowOutsideClick: false,
                showCancelButton: true,
                cancelButtonText: "Cancel",
                reverseButtons: true,
                confirmButtonText: "Yes",
            }).then((result) => {
                if (result.isConfirmed) {
                    // todo: process of deleting categories
                    event.target.submit();
                }
            });
        });
    });
</script>
@endpush

@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endpush

@push('javascript-internal')
<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "",
            columns: [
                //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                //  { "width": "20%" },
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                //  {
                //      data: 'email',
                //      name: 'email'
                //  },
                {
                    data: 'roles',
                    name: 'roles'
                },
                {
                    data: 'action',
                    name: 'action'
                },
                //  {
                //      data: 'finish_date',
                //      name: 'finish_date'
                //  },
                // {
                //    data: 'created_at',
                //    render: function(d) {
                //       return moment(d).format("DD/MM/YYYY HH:mm");
                //    }
                // },
                // {
                //    data: 'email',
                //    name: 'subject'
                // },
                // {
                //    data: 'email',
                //    name: 'address'
                // },
                // {
                //    data: 'email',
                //    name: 'phone'
                // },
                // {
                //    data: 'email',
                //    name: 'message'
                // }

            ]
        });
    });
</script>
@endpush