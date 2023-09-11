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

        <h5 class="card-header">Riders Vote</h5>
        <div style="width: 100px;margin-top:12px">
            <button type="button" class="btn btn-primary changeInput" data-bs-toggle="modal" data-bs-target="#modalCenter">
                Vote
            </button>
    
        </div>
    </div>
    <div class="table-responsive text-nowrap" style="height:1000px">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Rider</th>
                    <th>Total Vote</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($datas as $row)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td><strong>{{ $row->name }}</strong></td>
                    <td>{{$row->vote}}</td>
                    {{--
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow " data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button type="button" class="btn btn-primary changeInput" data-bs-toggle="modal" data-bs-target="#modalCenter" data-inputValue="{{$row->id}}">
                    Vote
                    </button>

    </div>
</div>
</td>
--}}
</tr>
@endforeach
</tbody>
</table>
</div>


</div>
<div class="col-lg-4 col-md-6">
    <small class="text-light fw-semibold">Vertically centered</small>
    <div class="mt-3">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{route('riders.store')}}" method="post">


                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Vote Popup</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Rider</label>
                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" fdprocessedid="m9ri69" name="riders">
                                        <option selected="">Open this select menu</option>
                                        @foreach($datas as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Vote</label>
                                    <input type="number" id="nameWithTitle" class="form-control" placeholder="Vote" style="width: 500px;" name="vote">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!--/ Basic Bootstrap Table -->
@endsection
@push('javascript-internal')
<script>
    $(document).ready(function() {

        $('.exit').on('click', function() {
            $('#modalCenter').removeClass('show')
        })

        $('.showModal').on('click', function() {
            $('#modalCenter').addClass('show')
        })


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