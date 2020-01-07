<div class="col-lg-3 col-md-12 dashboard-left-border">
   <div class="dashboard-left">
      <ul class="dashboard-menu">
         <li class="{{ $word == 'dashboard' ? 'active' : '' }}">
            <a href="{{route('candidate.dashboard.index')}}">
               <i class="fa fa-tachometer"></i>
               Dashboard
            </a>
         </li>
         <li class="{{ $word == 'applications' ? 'active' : '' }}">
            <a href="{{route('candidate.dashboard.index', 'applications')}}">
               <i class="fa fa-briefcase"></i>
               Postulaciones
            </a>
         </li>
         @include('partials.dashboard.password')
      </ul>
   </div>
</div>