@extends('layouts.app-admin')

@push('styles')

@endpush

@section('content')

@include('admin.partials.breadcrumb', ['title' => "Panel de administración", 
										'description' => "Haz lo que quieras"])

<div class="row">
    <!-- ============================================================== -->
    <!-- total revenue  -->
    <!-- ============================================================== -->

    <div class="col-xl-9 col-lg-7 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header"> Empresas registradas</h5>
            <div class="card-body">
                <div id="morris_totalrevenue"></div>
            </div>
            <div class="card-footer">
                <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- sales traffic country source  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Empresas según región</h5>
            <div class="card-body p-0">
                <ul class="country-sales list-group list-group-flush">
                    <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                        <span class="">United States</span><span class="float-right text-dark">78%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn-primary-link">View Details</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end sales traffice country source  -->
    <!-- ============================================================== -->
</div>


<div class="row">
    <!-- ============================================================== -->
    <!-- total revenue  -->
    <!-- ============================================================== -->

    <div class="col-xl-9 col-lg-7 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header"> Candidatos registrados</h5>
            <div class="card-body">
                <div id="morris_totalrevenue"></div>
            </div>
            <div class="card-footer">
                <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- sales traffic country source  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Candidatos según región</h5>
            <div class="card-body p-0">
                <ul class="country-sales list-group list-group-flush">
                    <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                        <span class="">United States</span><span class="float-right text-dark">78%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
                    </li>
                    <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn-primary-link">View Details</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end sales traffice country source  -->
    <!-- ============================================================== -->
</div>

@endsection


@push('scripts')

@endpush