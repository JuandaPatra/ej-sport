@extends('admin.layouts.dashboard')
@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Selamat Datang {{Auth::user()->name}}</h5>
            <p class="mb-4">
              Ada beberapa artikel <span class="fw-bold"></span> yang belum di Update. Klik Update tekan button Di bawah ini
            </p>
            <p class="btn btn-sm btn-outline-primary updateSkor">Update Artikel</p>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{ asset('vendor/my-dashboard/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class='bx bx-trip bx-lg '></i>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">USER</span>
            <h3 class="card-title mb-2">{{$userCount}}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class='bx bx-user bx-lg '></i>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">COMMENT</span>
            <h3 class="card-title text-nowrap mb-1">{{$commentCount}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 order-3">
    <div class="d-flex">








      <div style="overflow-x: auto;margin-top:35px;">
        <table class="table table-bordered " style="width: 900px;">
          <thead>
            <tr>
              <th class="sorting" style="width: 300px;">No</th>
              <th class="sorting" style="width: 300px;">Name</th>
              <th class="sorting" style="width: 300px;">Email</th>
            </tr>


          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>
                {{$loop->iteration}}
              </td>
              <td><strong>{{ $user->name }}</strong></td>
              <td>{{$user->email}}</td>

            </tr>

            @endforeach

          </tbody>
        </table>

      </div>


    </div>

    <div class="bs-toast toast toast-placement-ex m-2 bg-danger top-50 start-50 translate-middle fade toast-filter " role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
      <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Filter Alert</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Kamu hanya dapat memilih salah satu filter beserta tanggal saja
      </div>
    </div>
  </div>
  @endsection
  @push('javascript-internal')
  <script>
    $(document).ready(function() {
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
  @push('css-internal')
  <style>
    .post-tumbnail {
      width: 100%;
      height: 400px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>
  @endpush
  @push('javascript-internal')
  <script>
    $(document).ready(function() {
      let $flatpicker = $(".selector").flatpickr({
        dateFormat: "d/m/Y",
        minDate: "01.01.2023",
        maxDate: "31.12.2029",
        altInput: true,
        mode: "range",
        onChange: function(selectedDates, datestr, instance) {


          $(".selector").val(datestr.replace('to', '-'));
        }
      });



      $('.installment1').val($(this).is(':checked'));

      $('.installment1').click(function() {
        $('.installment1').val($(this).is(':checked'));
      });


      $('.installment2').val($(this).is(':checked'));

      $('.installment2').click(function() {
        $('.installment2').val($(this).is(':checked'));
        alert($('.installment2').val())
      });


      let installment1 = $('.installment1').val()
      let installment2 = $('.installment2').val()
      let date = $('.selector').val()
      let paymentMethodSelect = $('#paymentMethodSelect').val()
      let tripSelect = $('#tripSelect').val();


      let installmentInput = $('#installmentSelect').val()


      $('#installmentSelect').on('change', function() {
        let installmentSelect = $('#installmentSelect').val()

      })

      $('#paymentMethodSelect').on('change', function() {
        let paymentMethodSelect = $('#paymentMethodSelect').val()
      })

      $('#statusPaymentSelect').on('change', function() {
        let statusPaymentSelect = $('#statusPaymentSelect').val()
      })


      var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,

        ajax: {
          url: "/tableDashboardPost",
          type: "POST",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: function(d) {
            d.installment1 = installment1;
            d.installment2 = installment2;
            d.date = date;
            d.installmentSelect = $('#installmentSelect').val();
            d.paymentMethodSelect = $('#paymentMethodSelect').val();
            d.statusPaymentSelect = $('#statusPaymentSelect').val();
            d.tripSelect = $('#tripSelect').val();

            return d;

          }

        },



        columns: [
          //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
          //  { "width": "20%" },
          {
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            orderable: false,
            searchable: false
          },
          // {
          //   data: 'trip_categories_id',
          //   name: 'trip_categories_id'
          // },
          {
            data: 'trip_name',
            name: 'trip_name',
            width: '500px'
          },

          {
            data: 'qty',
            name: 'qty',
            width: '500px'
          },

          {
            data: 'invoice_id',
            name: 'invoice_id',
            width: '500px'
          },

          {
            data: 'order_id',
            name: 'order_id',
            width: '500px'
          },
          {
            data: 'opsi_pembelian',
            name: 'opsi_pembayaran',
            width: '500px'
          },
          {
            data: 'status',
            name: 'status',
            width: '500px'
          },
          {
            data: 'due_satu',
            name: 'due_satu',
            width: '500px'
          },
          {
            data: 'due_dua',
            name: 'due_dua',
            width: '500px'
          },

          {
            data: 'invoice',
            name: 'invoice',
            width: '500px'
          },

        ]
      });
      $('#sortByInstallmentButton').on('click', function() {
        installment1 = $('.installment1').val()
        installment2 = $('.installment2').val()
        date = $('.selector').val()


        // 1 2 3
        if ($('#installmentSelect').val() != '' && $('#paymentMethodSelect').val() != '' && $('#statusPaymentSelect').val() != '') {
          $('.toast-filter').addClass('show')
          return;
          //1 2
        } else if ($('#installmentSelect').val() != '' && $('#paymentMethodSelect').val() != '') {
          $('.toast-filter').addClass('show')
          return;
          // 1 3
        } else if ($('#installmentSelect').val() != '' && $('#statusPaymentSelect').val() != '') {

          $('.toast-filter').addClass('show')
          return;
          //2 3
        } else if ($('#paymentMethodSelect').val() != '' && $('#statusPaymentSelect').val() != '') {
          $('.toast-filter').addClass('show')
          return;
        }
        table.ajax.reload(null, false)
      })

      $('#allstatus').on('click', function() {
        $("select option:first-child").attr("selected", "");
        $("select option:first-child").removeAttr('selected').trigger('change');
        $flatpicker.clear()


        table.ajax.reload(null, false)

      })


    });
  </script>
  @endpush