@extends('layouts.app-admin')

@push('styles')
<link type="text/css" href="{{asset('admin.assets/vendor/datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<link type="text/css" href="{{asset('admin.assets/vendor/datatables/css/buttons.bootstrap4.css')}}" rel="stylesheet">
@endpush

@section('content')

@include('admin.partials.breadcrumb', ['title' => "Acepta o rechaza las nuevas ofertas de empleo", 
										'description' => "Aprueba nuevas empresas"])

<div class="row">
    <!-- ============================================================== -->
    <!-- data table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Nuevas ofertas</h5>
                <p>Acepta o rechaza las nuevas ofertas de empleo.</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="new-jobs" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Empresa</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end data table  -->
    <!-- ============================================================== -->
</div>

@include('admin.job.partials.modal')

@endsection

@push('scripts')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin.assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin.assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin.assets/vendor/datatables/js/data-table.js')}}"></script>

<script>
        let dt;
        let modal = $('#modalViewJob');
        jQuery(document).ready(function() {
            dt = jQuery("#new-jobs").DataTable({
                pageLength: 5,
                lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.job.datatable.index') }}',
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                columns: [
                    {data: 'id', visible:false},
                    {data: 'title'},
                    {data: 'company.title'},
                    {data: 'created_at'},
                    {data: 'actions'}
                ]
            });


            jQuery(document).on("click", '.viewJob', function (e) {
                e.preventDefault();
                modal.modal();
                const id = jQuery(this).data('id');
                jQuery.ajax({
                    url: '{{ route('admin.job.datatable.ajax') }}',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': $("meta[name=csrf-token]").attr('content')
                    },
                    data: {
                        id: id
                    },
                    success: (res) => {
                        modal.find('.modal-title').text(res.res.title);
                        modal.find('.modal-body').html(`${res.res.description}<div><h6>Lugar</h6>${res.res.province.province}, ${res.res.province.department.department}</div><div><h6>Empresa</h6>${res.res.company.title}</div>`);
                    }
                })
            });
        })

</script>

@endpush