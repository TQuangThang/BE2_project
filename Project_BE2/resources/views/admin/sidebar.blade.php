<!-- Sidebar -->
<ul CLASS="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
  <!-- Sidebar - Brand -->
  <a CLASS="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div CLASS="sidebar-brand-icon rotate-n-15">
      <i CLASS="fas fa-laugh-wink"></i>
    </div>
    <div CLASS="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>
 
  <!-- Divider -->
  <hr CLASS="sidebar-divider">
 
  <!-- Heading -->
  <div CLASS="sidebar-heading" style="display: none;">
    Interface
  </div>
 
  <!-- Nav Item - Pages Collapse Menu -->
  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i CLASS="fas fa-fw fa-cog"></i>
      <span>Menu</span>
    </a>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">User</h6>
        <a CLASS="collapse-item" href="#">List User</a>
        <a CLASS="collapse-item" href="#">Statistic</a>
      </div>
    </div>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Product</h6>
        <a CLASS="collapse-item" href="{{route('listproduct')}}">List Product</a>
        <a CLASS="collapse-item" href="#">Statistic</a>
      </div>
    </div>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Voucher</h6>
        <a CLASS="collapse-item" href="{{route('listvoucher')}}">List Voucher</a>
        <a CLASS="collapse-item" href="#">Statistic</a>
      </div>
    </div>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Category</h6>
        <a CLASS="collapse-item" href="{{route('listcategory')}}">List Category</a>
        <a CLASS="collapse-item" href="#">Statistic</a>
      </div>
    </div>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Invoice</h6>
        <a CLASS="collapse-item" href="{{route('listinvoice')}}">List Invoice</a>
        <a CLASS="collapse-item" href="#">Statistic</a>
      </div>
    </div>
  </li>
 
</ul>
<!-- End of Sidebar -->