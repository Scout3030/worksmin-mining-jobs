@extends('layouts.app')

@push('styles')

@endpush

@section('content')

@include('partials.shared.breadcrumb', ['page' => "Mi CV"])

<!-- Submit Resume Area Start -->
<section class="jobguru-submit-resume-area section_70">
	<div class="container">
		<div class="row">
		   <div class="col-md-12">
		      <div class="submit-resume-box">
		         <form method="POST" action="{{route('candidate.resume.update')}}" enctype="multipart/form-data" novalidate>
		            @csrf
		            @method('PUT')
		            <div class="resume-box">
		               <div class="single-resume-feild resume-avatar">
		                  <div class="resume-image">
		                     <img src="{{auth()->user()->pathAttachment()}}" alt="{{auth()->user()->candidate->name}}" />
		                     <div class="resume-avatar-hover">
		                        <div class="resume-avatar-upload">
		                           <p>
		                              <i class="fa fa-upload"></i>
		                              Actualizar
		                           </p>
		                           <input type="file" name="picture" id="picture">
		                        </div>
		                     </div>
		                  </div>
		               </div>
		               <h3>Información personal</h3>
		               <div class="single-resume-feild feild-flex-2">
		                  <div class="single-input">
	                     	<label for="name">Nombre</label>
	                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?: auth()->user()->candidate->name }}" autocomplete="false">
	                         @error('name')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		                  <div class="single-input">
	                     	<label for="professional_title">Titulo profesional</label>
	                        <input id="professional_title" type="text" class="form-control @error('professional_title') is-invalid @enderror" name="professional_title" value="{{ old('professional_title') ?: auth()->user()->candidate->professional_title }}" autocomplete="false">
	                         @error('professional_title')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		               </div>
		               <div class="single-resume-feild feild-flex-2">
		                  <div class="single-input">
		                     <label for="email">Correo electrónico</label>
		                     <input type="email" id="Email" name="email" readonly value="{{auth()->user()->email}}">
		                     @error('professional_title')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		                  <div class="single-input">
		                     <label for="phone">Teléfono</label>
	                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?: auth()->user()->candidate->phone }}" autocomplete="false">
	                         @error('phone')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		               </div>
		               <div class="single-resume-feild feild-flex-2">
		                  <div class="single-input">
		                    <label for="department_id">Departamento</label>
	                        <select id="department_id" name="department_id" class="form-control">
	                        	<option value="">Departamento</option>
	                           @foreach(\App\Department::orderBy('department')->pluck('department', 'id') as $id => $department)
	                             <option {{ (int) old('department_id') === $id || auth()->user()->candidate->department_id === $id ? 'selected' : '' }} value="{{ $id }}">
	                                 {{ $department }}
	                             </option>
	                            @endforeach
	                        </select>
		                  </div>
		                  <div class="single-input">
		                     	<label for="province_id">Provincia</label>
	                        	<select id="province_id" name="province_id" class="form-control">
	                        	<option value="">Provincia</option>
	                           @foreach(\App\province::orderBy('province')->pluck('province', 'id') as $id => $province)
	                             <option {{ (int) old('province_id') === $id || auth()->user()->candidate->province_id === $id ? 'selected' : '' }} value="{{ $id }}">
	                                 {{ $province }}
	                             </option>
	                            @endforeach
	                        </select>
		                  </div>
		               </div>
		               <div class="single-resume-feild ">
		                  <div class="single-input">
	                     	<label for="biography">Preséntate</label>
                        	<textarea id="biography" class="form-control" name="biography">{{ old('biography') ?: auth()->user()->candidate->biography }}</textarea>
		                  </div>
		               </div>
		            </div>
		          </form>
		          
					<div class="resume-box">
						<h3>Educación</h3>
						@foreach(auth()->user()->candidate->education as $education)
						<form action="">
							<div class="single-resume-feild ">
								<div class="single-input">
									<label for="degree">Título</label>
									<input id="degree" type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') ?: auth()->user()->candidate->education->first()}}" autocomplete="false">
									@error('degree')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="single-resume-feild feild-flex-2">
								<div class="single-input">
									<label for="e_from">Desde</label>
									<input type="text" id="e_from" class="datepicker form-control @error('e_from') is-invalid @enderror" name="e_from">
									@error('e_from')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="single-input">
									<label for="e_to">Hasta</label>
									<input type="text" id="e_to" class="datepicker form-control @error('e_to') is-invalid @enderror" name="e_to">
									@error('e_to')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="single-resume-feild ">
								<div class="single-input">
									<label for="institution"> Institución:</label>
									<input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution') ?: auth()->user()->candidate->education->first()}}" autocomplete="false">
									@error('institution')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="single-resume-feild ">
								<div class="single-input">
									<label for="e_additional_information">Información adicional: <span>(opcional)</span></label>
									<textarea id="e_additional_information" name="e_additional_information" class="form-control @error('e_additional_information') is-invalid @enderror" placeholder="Información adicional"></textarea>
									@error('e_additional_information')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</form>
						@endforeach
					</div>
		          
		          <form action="">
		            <div class="resume-box">
		               <h3>Experiencia de trabajo</h3>
		               <div class="single-resume-feild ">
		                  <div class="single-input">
		                     <label for="title">Titulo</label>
		                     <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?: auth()->user()->candidate->education->first()}}" autocomplete="false">
	                         @error('title')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		               </div>
		               <div class="single-resume-feild feild-flex-2">
		                  <div class="single-input">
		                     <label for="w_from">Desde</label>
		                     <input type="text" id="w_from" name="w_from" class="datepicker">
		                  </div>
		                  <div class="single-input">
		                     <label for="w_to">Hasta</label>
		                     <input type="text" id="w_to" name="w_to" class="datepicker">
		                  </div>
		               </div>
		               <div class="single-resume-feild ">
		                  <div class="single-input">
		                     <label for="company">Empresa</label>
		                     <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') ?: auth()->user()->candidate->education->first()}}" autocomplete="false">
	                         @error('company')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		               </div>
		               <div class="single-resume-feild ">
		                  <div class="single-input">
		                     <div class="single-input">
		                     <label for="w_additional_information">Información adicional: <span>(opcional)</span></label>
		                     <textarea id="w_additional_information" name="w_additional_information" class="form-control @error('w_additional_information') is-invalid @enderror" placeholder="Información adicional"></textarea>
		                     @error('w_additional_information')
	                         <span class="invalid-feedback" role="alert">
	                             <strong>{{ $message }}</strong>
	                         </span>
	                         @enderror
		                  </div>
		                  </div>
		               </div>
		            </div>
		          </form>
		          <form action="">
		            <div class="resume-box">
		               <h3>Habilidades</h3>
		               <div class="single-resume-feild ">
		                  <div class="single-input">
		                     <label for="skills">Habilidades</label>
		                     <input type="text" placeholder="Escribe tus habilidades separándolas por comas" id="skills" name="skills">
		                  </div>
		               </div>
		            </div>
		            <div class="submit-resume">
		               <button type="submit">Guardar CV</button>
		            </div>
		         </form>
		      </div>
		   </div>
		</div>
	</div>
</section>
<!-- Submit Resume Area End -->
@endsection


@push('scripts')
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
