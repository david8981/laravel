
<nav class="side-navbar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center"><a href="javascript:void(0)">
  <div class="avatar">
    <img src=".." alt="..." class="img-fluid rounded-circle">
  </a>
  </div>
  <div class="title">
  <h1 class="h4">Mark Stephen</h1>
  <p>Web Designer</p>
  </div>
  </div>
  <!-- Sidebar Navidation Menus-->
  <span class="heading">Main</span>
  <ul class="list-unstyled">

     
   
    {{-- Li ul demo
    <li>
    <a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse" class="collapsed"> <i class="icon-interface-windows"></i>Pages </a>
              <ul id="pagesDropdown" class="list-unstyled collapse" style="">
                <li class="active"><a href="pages-contacts.html">Contacts</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
                <li><a href="login.html">Login page</a></li>
                <li><a href="login-2.html">Login v.2 <span class="badge badge-info">New</span></a></li>
                <li><a href="pages-profile.html">Profile</a></li>
                <li><a href="pages-pricing.html">Pricing table</a></li>
              </ul>
            
     </li>  
 
    --}}
    
   
     
        <li class="{{ (request()->segment(2)=='category') ? 'active' : '' }}"><a href="{{ route('category.index') }}"><i class="icon-grid"></i>Category Management</a></li>

         <li class="{{ (request()->segment(2)=='subcategory') ? 'active' : '' }}"><a href="{{ route('subcategory.index') }}"><i class="icon-padnote"></i>Sub Categ. Manage.</a></li>
       


    {{-- <li>
      <a href="https://demo.bootstrapious.com/admin-premium/1-4-5/index.html"> <i class="icon-home"></i>Home </a>
    </li> --}}

  {{--   <li>
      <a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Tables </a>
    <ul id="tablesDropdown" class="collapse list-unstyled ">
      <li>
        <a href="https://demo.bootstrapious.com/admin-premium/1-4-5/tables.html">Bootstrap tables</a>
      </li>
      <li>
        <a href="https://demo.bootstrapious.com/admin-premium/1-4-5/tables-datatable.html">Datatable</a>
      </li>
    </ul>
    </li> --}}

    {{-- <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Charts </a>
    <ul id="chartsDropdown" class="collapse list-unstyled ">
    <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/charts.html">Charts</a></li>
    <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/charts-gauge-sparkline.html">Gauge + Sparkline</a></li>
  </ul>
  </li>
  <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms </a>
  <ul id="formsDropdown" class="collapse list-unstyled ">
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/forms.html">Basic forms</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/forms-advanced.html">Advanced forms</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/forms-autocomplete.html">Autocomplete</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/forms-dropzone.html">Files upload</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/forms-texteditor.html">Text editor</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/forms-validation.html">Validation</a></li>
  </ul>
  </li>
  <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Components </a>
  <ul id="componentsDropdown" class="collapse list-unstyled ">
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-cards.html">Cards</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-calendar.html">Calendar</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-gallery.html">Gallery</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-loading-buttons.html">Loading buttons</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-map.html">Maps</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-notifications.html">Notifications</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/components-preloader.html">Preloaders</a></li>
  </ul>
  </li>
  <li class="active"><a href="#pagesDropdown" aria-expanded="true" data-toggle="collapse"> <i class="icon-interface-windows"></i>Pages </a>
  <ul id="pagesDropdown" class="collapse list-unstyled show">
  <li class="active"><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/pages-contacts.html">Contacts</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/pages-invoice.html">Invoice</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/login.html">Login page</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/login-2.html">Login v.2 <span class="badge badge-info">New</span></a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/pages-profile.html">Profile</a></li>
  <li><a href="https://demo.bootstrapious.com/admin-premium/1-4-5/pages-pricing.html">Pricing table</a></li>
  </ul>
  </li>
  </ul><span class="heading">Extras</span>
  <ul class="list-unstyled">
    <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
  </ul> --}}
</nav>