@extends('layouts.app')

@push('styles')

@endpush

@section('content')

@include('partials.shared.breadcrumb', ['page' => "Postea gratis"])

<!-- Candidate Dashboard Area Start -->
<section class="candidate-dashboard-area section_70">
   	<div class="container">
      	<div class="row">
        	<div class="col-lg-2"></div>
	        	<div class="col-md-12 col-lg-8">
		        	<div class="dashboard-right">
					   	<div class="earnings-page-box manage-jobs">
							@if(session('message'))
							<div class="alert alert-{{ session('message')['status'] }} alert-dismissible">
							  	<button type="button" class="close" data-dismiss="alert">&times;</button>
							   {{ session('message')['message'] }}
							</div>
							@endif
							<div class="manage-jobs-heading">
							 	<h3>Publica una nueva oferta de empleo</h3>
							</div>
					      	<div class="new-job-submission">
					         	<form 
						            method="POST" 
						            action="{{route('freePostStore')}}">
						            @csrf
						            <div class="resume-box">
										<div class="single-resume-feild feild-flex-2">
											<div class="single-input">
												<label for="title">Título del empleo</label>
												<input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
												 @error('title')
												<span class="invalid-feedback" role="alert">
												      <strong>{{ $message }}</strong>
												</span>
											 	@enderror
											</div>
											<div class="single-input">
												<label for="job_type_id">Tipo de trabajo</label>
						                     	<select id="job_type_id" name="job_type_id" class="form-control @error('job_type_id') is-invalid @enderror">
						                        <option value="">Tipo</option>
					                        	@foreach(\App\JobType::pluck('job_type', 'id') as $id => $job_type)
					                             	<option {{ (int) old('job_type_id') === $id ? 'selected' : '' }} value="{{ $id }}">
					                                 {{ $job_type }}
					                             	</option>
					                         	@endforeach
						                     	</select>
						                      	@error('job_type_id')
						                      	<span class="invalid-feedback" role="alert">
						                          	<strong>{{ $message }}</strong>
						                      	</span>
						                     	@enderror
											</div>
										</div>
						               	<div class="single-resume-feild feild-flex-2">
											<div class="single-input">
											 	<label for="category_id">Categoría:</label>
											 	<select id="category_id" name="category_id">
											    <option value="">Categoría</option>
											    @foreach(\App\Category::orderBy('category')->pluck('category', 'id') as $id => $category)
											         <option {{ (int) old('category_id') === $id ? 'selected' : '' }}
											          value="{{ $id }}">
											             {{ $category }}
											         </option>
											    @endforeach
											 	</select>
											</div>
						                  	<div class="single-input">
						                     <label for="subcategory_id">Subcategoría:</label>
						                     <select id="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id">
						                        <option value="">Subcategoría</option>

						                        @foreach(\App\Subcategory::orderBy('subcategory')->pluck('subcategory', 'id') as $id => $subcategory)
						                             <option {{(int) old('subcategory_id') === $id ? 'selected' : '' }} value="{{ $id }}">
						                                 {{ $subcategory }}
						                             </option>
						                        @endforeach
						                        
						                     </select>
						                     @error('subcategory_id')
						                      <span class="invalid-feedback" role="alert">
						                          <strong>{{ $message }}</strong>
						                      </span>
						                     @enderror
						                  	</div>
						               	</div>
						               	<div class="single-resume-feild feild-flex-2">
						                  	<div class="single-input">
						                     	<label for="department_id">Departamento</label>
							                    <select id="department_id" name="department_id">
							                        <option value=''>Departamento</option>
							                        @foreach(\App\Department::orderBy('department')->pluck('department', 'id') as $id => $department)
							                             <option {{ (int) old('department_id') === $id ? 'selected' : '' }} value="{{ $id }}">
							                                 {{ $department }}
							                             </option>
							                         @endforeach
							                    </select>
						                  	</div>
						                  	<div class="single-input">
						                     	<label for="province_id">Provincia</label>
						                     	<select id="province_id" name="province_id" class="form-control @error('province_id') is-invalid @enderror">
						                        <option value=''>Provincia</option>
						                        @foreach(\App\Province::orderBy('province')->whereDepartmentId(old('department_id'))->pluck('province', 'id') as $id => $province)
						                             <option {{ (int) old('province_id') === $id ? 'selected' : ''}} value="{{$id}}">
						                                 {{$province}}
						                             </option>
						                        @endforeach
						                     	</select>
						                     	@error('province_id')
						                      	<span class="invalid-feedback" role="alert">
						                          	<strong>{{ $message }}</strong>
						                      	</span>
						                     	@enderror
						                  	</div>
						               	</div>
						               	<div class="single-resume-feild feild-flex-2">
						                  	<div class="single-input">
						                     	<label for="min_salary">Salario minimo (S/) <span>(opcional)</span></label>
						                     	<input type="text" id="min_salary" name="min_salary" class="form-control @error('min_salary') is-invalid @enderror" value="{{ old('min_salary')}}">
						                     	@error('min_salary')
						                      	<span class="invalid-feedback" role="alert">
						                          <strong>{{ $message }}</strong>
						                      	</span>
						                     @enderror
						                  	</div>
						                  	<div class="single-input">
						                     	<label for="max_salary">Salario máximo (S/) <span>(opcional)</span></label>
						                     	<input type="text" id="max_salary" name="max_salary" class="form-control @error('max_salary') is-invalid @enderror" value="{{ old('max_salary')}}">
						                    	 @error('max_salary')
						                      	<span class="invalid-feedback" role="alert">
						                          <strong>{{ $message }}</strong>
						                      	</span>
						                     @enderror
						                  	</div>
						               </div>

						               <div class="single-resume-feild">
						                  	<div class="single-input">
							                    <label for="description">Descripción del trabajo:</label>
							                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
							                    @error('description')
							                      <span class="invalid-feedback" role="alert">
							                          <strong>{{ $message }}</strong>
							                      </span>
							                    @enderror
						                  	</div>
						               	</div>
						            </div>
						            <h4>Datos de contacto</h4>
						            <div class="single-resume-feild feild-flex-2">
					                  	<div class="single-input">
					                     	<label for="company">Empresa</span></label>
					                     	<input type="text" id="company" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company')}}" placeholder="Empresa">
					                     	@error('company')
					                      	<span class="invalid-feedback" role="alert">
					                          <strong>{{ $message }}</strong>
					                      	</span>
					                     @enderror
					                  	</div>
					                  	<div class="single-input">
					                     	<label for="ruc">RUC</span></label>
					                     	<input type="text" id="ruc" name="ruc" class="form-control @error('ruc') is-invalid @enderror" value="{{ old('ruc')}}" placeholder="RUC">
					                    	 @error('ruc')
					                      	<span class="invalid-feedback" role="alert">
					                          <strong>{{ $message }}</strong>
					                      	</span>
					                     @enderror
					                  	</div>
					                </div>
					                <div class="single-resume-feild feild-flex-2">
					                  	<div class="single-input">
					                     	<label for="email">Correo electrónico</span></label>
					                     	<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" placeholder="Correo electrónico">
					                     	@error('email')
					                      	<span class="invalid-feedback" role="alert">
					                          <strong>{{ $message }}</strong>
					                      	</span>
					                     @enderror
					                  	</div>
					                  	<div class="single-input">
					                     	<label for="phone">Teléfono</span></label>
					                     	<input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone')}}" placeholder="Teléfono">
					                    	 @error('phone')
					                      	<span class="invalid-feedback" role="alert">
					                          <strong>{{ $message }}</strong>
					                      	</span>
					                     @enderror
					                  	</div>
					                </div>
						            <div class="single-input submit-resume">
						               	<button type="submit">Postear</button>
						            </div>
					        	</form>
					      	</div>
					   	</div>
					</div>
				</div>
	     	</div>
      	</div>
   	</div>
</section>
<!-- Candidate Dashboard Area End -->


@endsection


@push('scripts')
<script>
	$(document).ready(function(){
		$("#department_id").on("change", function(){
			var department_id = $(this).val();
			var data = {
		      title: 'department',
		      value: department_id
		    }

		    $.ajax({
		      url: '{{ route('second.ajax') }}',
		      type: 'POST',
		      headers: {
		          'x-csrf-token': $("meta[name=csrf-token]").attr('content')
		      },
		      data: {
		          data: data
		      },
		      success: (res) => {
		        $('#province_id option').remove();
		        $('#province_id').append('<option value="">Provincia</option>');
		        $.each(res, function( index, value ) {
		        	var provice = `<option value='${value.id}'>${value.province}</option>`
		        	$('#province_id').append(provice);
				});
		      }
		    })
		})


		$("#category_id").on("change", function(){
			var category_id = $(this).val();
			var data = {
		      title: 'category',
		      value: category_id
		    }

		    $.ajax({
		      url: '{{ route('second.ajax') }}',
		      type: 'POST',
		      headers: {
		          'x-csrf-token': $("meta[name=csrf-token]").attr('content')
		      },
		      data: {
		          data: data
		      },
		      success: (res) => {
		        $('#subcategory_id option').remove();
		        $('#subcategory_id').append('<option value="">Subcategoria</option>');
		        $.each(res, function( index, value ) {
		        	var provice = `<option value='${value.id}'>${value.subcategory}</option>`
		        	$('#subcategory_id').append(provice);
				});
		      }
		    })
		})
	})
</script>
@endpush