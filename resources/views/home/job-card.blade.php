<li>
   <div class="top-company-list">
      <div class="company-list-logo">
         <a href="{{route('job.show', $job->slug)}}">
         @if($job->company_id != null)
         <img src="{{$job->company->user->pathAttachment()}}" alt="{{$job->company->title}}" />
         @else
         <img src="{{asset('images/default_company.png')}}" alt="{{$job->free_post_dates}}" />
         @endif
         </a>
      </div>
      <div class="company-list-details">
         <h3><a href="{{route('job.show', $job->slug)}}">{{$job->title}}</a></h3>
         <p class="company-state"><i class="fa fa-map-marker"></i> {{$job->province->province}}, {{$job->province->department->department}}</p>
         <p class="open-icon"><i class="fa fa-clock-o"></i>{{$job->publishedDate()}}</p>
         @if($job->max_salary != null)
         <p class="varify"><i class="fa fa-check"></i>Salario : S/{{$job->min_salary}} - S/{{$job->max_salary}}</p>
         @endif
      </div>
      <div class="company-list-btn">
         <a href="{{route('job.show', $job->slug)}}" class="jobguru-btn">Ver oferta</a>
      </div>
   </div>
</li>