 <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
     <div class="nav-scroller">
         <!-- Brand logo -->
         <a class="navbar-brand" href="/">
             <img src="images/brand/logo/logo.svg" alt="" />
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">

             <li class="nav-item">
                 <a class="nav-link has-arrow @@if (context.page ===  'dashboard') { active }"
                     href="/">
                     <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                 </a>

             </li>
             <li class="nav-item">
                @role('admin')
                 <a class="nav-link has-arrow @@if (context.page ===  'dashboard') { active }"
                     href="/Dashboard/admin">
                     <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard Admin
                 </a>
                 @endrole
             </li>


             <!-- Nav item -->
             {{-- <li class="nav-item">
                 <div class="navbar-heading">Layouts & Pages</div>
             </li> --}}


             <!-- Nav item -->
             {{-- <li class="nav-item">
                 <a class="nav-link has-arrow @@if (context.page_group !== 'pages') { collapsed }"
                     href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false"
                     aria-controls="navPages">
                     <i data-feather="layers" class="nav-icon icon-xs me-2">
                     </i> Pages
                 </a>

                 <div id="navPages"
                     class="collapse @@if (context.page_group === 'pages') { show }"
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link @@if (context.page === 'profile') { active }"
                                 href="@@webRoot/pages/profile.html">
                                 Profile
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow  @@if (context.page === 'settings') { active } "
                                 href="@@webRoot/pages/settings.html">
                                 Settings
                             </a>

                         </li>


                         <li class="nav-item">
                             <a class="nav-link @@if (context.page === 'billing') { active }"
                                 href="@@webRoot/pages/billing.html">
                                 Billing
                             </a>
                         </li>




                         <li class="nav-item">
                             <a class="nav-link @@if (context.page === 'pricing') { active }"
                                 href="@@webRoot/pages/pricing.html">
                                 Pricing
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link @@if (context.page === '404error') { active }"
                                 href="@@webRoot/pages/404-error.html">
                                 404 Error
                             </a>
                         </li>
                     </ul>
                 </div>

                </li> --}}
             <!-- Nav item -->
             <li class="nav-item">
                 <div id="navAuthentication"
                     class="collapse @@if (context.page_group === 'authentication') { show }"
                     data-bs-parent="#sideNavbar">
                     @auth
                         <form action="/logout" method="post">
                             @csrf
                             <ul class="nav flex-column border border-0">
                                 <li class="nav-item border border-0">
                                     <button type="submit" class="nav-link border border-0 bg-dark text-white">Logout</button>

                                 </li>
                             </ul>
                         </form>
                     @else
                         <ul class="nav flex-column">
                             <li class="nav-item">
                                 <a class="nav-link @@if ($title === 'Login') { active }"
                                     href="/Login"> Login</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 </form>
             @endauth
             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Documentation</div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                     href="@@webRoot/docs/index.html">
                     <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                     </i> Docs
                 </a>
             </li>
         </ul>

     </div>
 </nav>
