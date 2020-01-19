@extends('layouts.app')

@push('metas')

<!-- =============================================
=                   GOOGLE                   =
============================================= -->

<meta data-rh="true" content="{{$job->title}}" property="og:title"/>
<meta data-rh="true" content="{{$job->description}}" name="description"/>
<meta data-rh="true" content="{{$job->company_id ? $job->company->pathAttachment() : asset('images/default-company.png')}}" property="og:image"/>
<meta data-rh="true" content="{{route('job.show', $job->slug)}}" property="og:url"/>
<meta data-rh="true" content="rgb(154, 21, 32)" name="theme-color"/>

<!-- =============================================
=                  FACEBOOK                   =
============================================= -->

<meta property="og:title"   content="{{$job->title}}">
<meta property="og:url" content="{{route('job.show', $job->slug)}}">
<meta property="og:description" content="{{$job->description}}">
<meta property="og:image"  content="{{$job->company_id ? $job->company->pathAttachment() : asset('images/default-company.png')}}">
<meta property="fb:app_id" content="2117440978352810">
<meta property="og:type"  content="website">  
<meta property="og:site_name" content="Worksmin | Empleos en minería, en todo el Perú.">
<meta property="og:locale" content="es_PE">

<!-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '600219774152515',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v5.0'
    });
  };
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script> -->

@endpush

@section('title')
{{$job->title}} -
@endsection 

@push('styles')

<script data-rh="true" type="application/ld+json">
{
  "@context" : "https://schema.org/",
  "@type" : "JobPosting",
  "title" : "{{$job->title}}",
  "description" : "<p>{{$job->description}}</p>",
  "identifier": {
    "@type": "PropertyValue",
    "name": "MagsRUs Wheel Company",
    "value": "1234567"
  },
  "datePosted" : "{{$job->created_at->format('Y-m-d')}}",
  "validThrough" : "2017-03-18T00:00",
  "employmentType" : "CONTRACTOR",
  "hiringOrganization" : {
    "@type" : "Organization",
    "name" : "{{$job->company_id ? $company->title : json_decode($job->free_post_dates, true)['company']}}",
    "sameAs" : "http://www.google.com",
    "logo" : "{{$job->company_id ? $job->company->pathAttachment() : asset('images/default-company.png')}}"
  },
  "jobLocation": {
  "@type": "Place",
    "address": {
    "@type": "PostalAddress",
    "addressLocality": "{{$job->province->department->department}}",
    "addressCountry": "PE"
    }
  }
}
</script>

@endpush

@section('content')

<!-- Single Candidate Start -->
<section class="single-candidate-page section_70">
 <div class="container">
    <div class="row">
       <div class="col-md-9 col-lg-6">
          <div class="single-candidate-box">
             <div class="single-candidate-img">
                @if($job->company_id != null)
                <img src="{{$job->company->user->pathAttachment()}}" alt="{{$job->company->title}}" />
                @else
                <img src="{{asset('images/default-company.png')}}" alt="{{$job->free_post_dates}}" />
                @endif
             </div>
             <div class="single-candidate-box-right">
                <h4>{{$job->title}}</h4>
                @if($job->company_id)
                <p>{{$job->company->title}}</p>
                @else
                <p>@php echo json_decode($job->free_post_dates, true)['company']; @endphp</p>
                @endif
                <div class="job-details-meta">
                   <!-- <p><i class="fa fa-file-text"></i> Applications 1</p> -->
                   <p><i class="fa fa-calendar"></i> {{$job->created_at->format('d-m-Y')}}</p>
                </div>
             </div>
          </div>
       </div>
       @if($job->company_id != null)
       <div class="col-md-3 col-lg-6">
          <div class="single-candidate-action">
             <a href="{{route('company.show', $job->company->slug)}}" class="candidate-contact" target="_BLANK"><i class="fa fa-star"></i>Ver perfil de la empresa</a>
          </div>
       </div>
       @endif
    </div>
 </div>
</section>
<!-- Single Candidate End -->


<!-- Single Candidate Bottom Start -->
<section class="single-candidate-bottom-area section_70">
 <div class="container">
    <div class="row">
       <div class="col-md-8 col-lg-9">
          <div class="single-candidate-bottom-left">
            @if(session('message'))
              <div class="alert alert-{{ session('message')['status'] }} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 {{ session('message')['message'] }}
              </div>
            @endif
               
             <div class="single-candidate-widget">
                <h3>Descripción de la oferta de empleo</h3>
                <p>{{$job->description}}</p>
             </div>
<!--              <div class="single-candidate-widget clearfix">
                <h3>Comparte esta oferta de empleo</h3>
                <ul class="share-job">
                   <li><a href="javascript:void(0)"><i class="fa fa-facebook btn-facebook"></i></a></li> -->
<!--                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
<!--                 </ul>
             </div> -->
             <div class="single-candidate-widget">
                <h3>Ofertas similares</h3>
                
                @forelse($related as $related)
                @include('job.related-card')
                @empty
                Ninguna oferta similar por el momento
                @endforelse
                
             </div>
          </div>
       </div>
       <div class="col-md-4 col-lg-3">
          <div class="single-candidate-bottom-right">
             @include('partials.job.apply_button')
             <div class="single-candidate-widget-2">
                <h3>Detalles del trabajo</h3>
                <ul class="job-overview">
                    @if($job->max_salary != null)
                   <li>
                      <h4><i class="fa fa-briefcase"></i> Salario ofrecido</h4>
                      <p>S/{{round($job->min_salary, 0)}} - S/{{round($job->max_salary, 0)}}</p>
                   </li>
                   @endif
                   <li>
                      <h4><i class="fa fa-map-marker"></i> Ubicación</h4>
                      <p>{{$job->province->province}}, {{$job->province->department->department}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-thumb-tack"></i> Tipo de trabajo</h4>
                      <p>{{$job->jobType->job_type}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-clock-o"></i> Fecha de publicación</h4>
                      <p>{{$job->created_at->format('d/m/Y')}}</p>
                   </li>
                </ul>
             </div>
             <!-- @ include('job.fast_contact') -->
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Single Candidate Bottom End -->

@endsection

@push('scripts')

<!-- <script>
  $('.btn-facebook').click(function(){
    console.log('Hola prro');
    FB.ui({
      method: 'share',
      href: 'https://developers.facebook.com/docs/',
    }, function(response){});
  })
</script> -->

@endpush