<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{route('home')}}"  class="simple-text logo-normal">
        Beatnik TEST
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{ Request::is('home')? 'active' : ''}}">
          <a class="nav-link" href="{{route('home')}}">
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/intro')? 'active' : ''}}">
          <a class="nav-link" href="{{route('intro.index')}}">
            <p>Introduction</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/about-us')? 'active' : ''}}">
          <a class="nav-link" href="{{route('about-us.index')}}">
            <p>About Us</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/service')? 'active' : ''}}">
          <a class="nav-link" href="{{route('service.index')}}">
            <p>Service</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/category')? 'active' : ''}}">
          <a class="nav-link" href="{{route('category.index')}}">
            <p>Category</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/portfolio')? 'active' : ''}}">
          <a class="nav-link" href="{{route('portfolio.index')}}">
            <p>Portfolio</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/question')? 'active' : ''}}">
          <a class="nav-link" href="{{route('question.index')}}">
            <p>Question && ans</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/companyinfo')? 'active' : ''}}">
          <a class="nav-link" href="{{route('company-info.index')}}">
            <p>Conpany-info</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/experience')? 'active' : ''}}">
          <a class="nav-link" href="{{route('experiance.index')}}">
            <p>Experience</p>
          </a>
        </li>



      </ul>
    </div>
  </div>
