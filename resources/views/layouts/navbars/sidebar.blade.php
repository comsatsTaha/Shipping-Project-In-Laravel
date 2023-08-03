<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      {{ __('C2C') }}
    </a>
    <a href="#" class="simple-text logo-normal">
      {{ __('Shipping') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
    
      
          
     @admin
     <li class=" ">
      <a href="{{ route('home') }}">
        <i class="now-ui-icons design_app"></i>
        <p>{{ __('Dashboard') }}</p>
      </a>
    </li>
     <li class="">
      <a href="{{ route('user.index') }}">
        <i class="now-ui-icons design_app"></i>
        <p>{{ __('Users') }}</p>
      </a>
    </li>
    <li class="">
        <a href="{{route('shipper.list')}}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Shippers') }}</p>
        </a>
      </li>
    <li class="">
      <a href="{{route('package.list')}}">
        <i class="now-ui-icons design_app"></i>
        <p>{{ __('Packages List') }}</p>
      </a>
    </li>
    <li class=" ">
      <a href="{{ route('estimation.list') }}">
        <i class="now-ui-icons design_app"></i>
        <p>{{ __('Estimate Packages') }}</p>
      </a>
    </li>
    <li class=" ">
      <a href="{{ route('ships.index') }}">
        <i class="now-ui-icons design_app"></i>
        <p>{{ __('Ships') }}</p>
      </a>
    </li>
    <li class=" ">
      <a href="{{ route('countries.index') }}">
        <i class="now-ui-icons design_app"></i>
        <p>{{ __('Countries') }}</p>
      </a>
    </li>
    <li class="">
        <a href="{{ route('messages.index') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Mail Box') }}</p>
        </a>
      </li>
     @endadmin
    
       @client
       <li class=" ">
        <a href="{{ route('client') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="">
        <a href="{{ route('package.estimation') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Package Estimation') }}</p>
        </a>
      </li>
       <li class="">
        <a href="{{ route('package.add') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Add Package') }}</p>
        </a>
      </li>
      <li class="">
        <a href="{{route('package.history')}}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Packages History') }}</p>
        </a>
      </li>

      <li class="">
        <a href="{{route('estimation.history')}}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Estimation History') }}</p>
        </a>
      </li>
      <li class="">
        <a href="{{route('shipper.list')}}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Shipper Details') }}</p>
        </a>
      </li>
      <li class="">
        <a href="{{ route('messages.index') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Mail Box') }}</p>
        </a>
      </li>
       @endclient
       @shipper
       <li class=" ">
        <a href="{{ route('shipper') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class=" ">
        <a href="{{ route('recived.list') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Recived Packages') }}</p>
        </a>
      </li>
      <li class=" ">
        <a href="{{ route('estimation') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Estimate Packages') }}</p>
        </a>
      </li>


      <li class=" ">
        <a href="{{ route('ships.index') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Ships') }}</p>
        </a>
      </li>
      <li class="">
        <a href="{{ route('messages.index') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Mail Box') }}</p>
        </a>
      </li>


       @endshipper
      {{-- <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class = "">
        <a href="{{ route('page.index','upgrade') }}" class="bg-info">
          <i class="now-ui-icons arrows-1_cloud-download-93"></i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
