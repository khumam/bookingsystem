<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">
  <div data-simplebar class="h-full">
    <div id="sidebar-menu">
      <ul class="metismenu" id="side-menu">
        <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>
        <li>
          <a href="{{ route('dashboard.index') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
            <i data-feather="home"></i>
            <span data-key="t-dashboard" class="prose"> Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ route('dashboard.booking.index') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
            <i data-feather="book"></i>
            <span data-key="t-booking" class="prose"> Booking</span>
          </a>
        </li>
        <li>
          <a href="{{ route('dashboard.user.index') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
            <i data-feather="user"></i>
            <span data-key="t-dashboard" class="prose"> User</span>
          </a>
        </li>
    </div>
  </div>
</div>
