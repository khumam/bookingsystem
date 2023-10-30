<nav
    class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">
    <div class="flex items-center justify-between w-full">
        <div class="topbar-brand flex items-center">
            <div
                class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                <a href="#" class="flex items-center font-bold text-lg  dark:text-white">
                    <span class="hidden xl:block align-middle">Barra Dev</span>
                </a>
            </div>
            <button type="button"
                class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn"
                id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <form class="app-search hidden xl:block px-5">
                <div class="relative inline-block">
                    <input type="text"
                        class="bg-gray-50/30 dark:bg-zinc-700/50 border-0 rounded focus:ring-0 placeholder:text-sm px-4 dark:placeholder:text-gray-200 dark:text-gray-100 dark:border-zinc-700 "
                        placeholder="Search...">
                    <button
                        class="py-1.5 px-2.5 text-white bg-violet-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto"
                        type="button"><i class="bx bx-search-alt align-middle"></i></button>
                </div>
            </form>
        </div>
        <div class="flex items-center">

            <div>
                <div class="dropdown relative sm:hidden block">
                    <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle"
                        data-dropdown-toggle="navNotifications">
                        <i data-feather="search" class="h-5 w-5"></i>
                    </button>

                    <div class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300"
                        id="navNotifications">
                        <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                            <div class="form-group m-0">
                                <div class="flex w-full">
                                    <input type="text"
                                        class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit"
                                        placeholder="Search ..." aria-label="Search Result">
                                    <button
                                        class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white"
                                        type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div>
                <div class="dropdown relative ">
                    <div class="relative">
                        <button type="button"
                            class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-100"
                            aria-expanded="false" data-dropdown-toggle="notification">
                            <i data-feather="bell" class="h-5 w-5"></i>
                        </button>
                        <span
                            class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                    </div>
                    <div class="dropdown-menu absolute z-50 hidden w-80 list-none rounded bg-white shadow dark:bg-zinc-800 "
                        id="notification">
                        <div class="border border-gray-50 dark:border-gray-700 rounded" aria-labelledby="notification">
                            <div class="grid grid-cols-12 p-4">
                                <div class="col-span-6">
                                    <h6 class="m-0 text-gray-700 dark:text-gray-100"> Notifications </h6>
                                </div>
                                <div class="col-span-6 justify-self-end">
                                    <a href="#!" class="text-xs underline dark:text-gray-400"> Unread (3)</a>
                                </div>
                            </div>
                            <div class="max-h-56" data-simplebar>
                                <div>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                            <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                <img src="{{ url('assets/images/users/avatar-3.jpg') }}"
                                                    class="rounded-full h-8 w-8" alt="user-pic">
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">James Lemire</h6>
                                                <div class="text-13 text-gray-600">
                                                    <p class="mb-1 dark:text-gray-400">It will seem like simplified
                                                        English.</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                        <span>1 hour ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                            <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                <div class="h-8 w-8 bg-violet-500 rounded-full text-center">
                                                    <i class="bx bx-cart text-xl leading-relaxed text-white"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your order is placed
                                                </h6>
                                                <div class="text-13 text-gray-600">
                                                    <p class="mb-1 dark:text-gray-400">If several languages coalesce the
                                                        grammar</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                        <span>3 min ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                            <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                <div class="h-8 w-8 bg-green-500 rounded-full text-center">
                                                    <i class="bx bx-badge-check text-xl leading-relaxed text-white"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your item is shipped
                                                </h6>
                                                <div class="text-13 text-gray-600">
                                                    <p class="mb-1 dark:text-gray-400">If several languages coalesce the
                                                        grammar</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                        <span>3 min ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                            <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                <img src="{{ url('assets/images/users/avatar-6.jpg') }}"
                                                    class="rounded-full h-8 w-8" alt="user-pic">
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Salena Layfield</h6>
                                                <div class="text-13 text-gray-600">
                                                    <p class="mb-1 dark:text-gray-400">As a skeptical Cambridge friend
                                                        of mine occidental.</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                        <span>1 hour ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-1 border-t grid border-gray-50 dark:border-zinc-600 justify-items-center">
                                <a class="btn border-0 text-violet-500" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="dropdown relative ltr:mr-4 rtl:ml-4">
                    <button type="button"
                        class="flex items-center px-4 py-5 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">
                        <img class="h-8 w-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2"
                            src="https://ui-avatars.com/api/?background=random&name={{ \Str::slug(\Auth()->user()->name) }}"
                            alt="Header Avatar">
                        <span class="fw-medium hidden xl:block prose">{{ \Auth()->user()->name }}</span>
                        <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                    </button>
                    <div class="dropdown-menu absolute top-0 ltr:-left-3 rtl:-right-3 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800"
                        id="profile/log">
                        <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                            <div class="dropdown-item dark:text-gray-100">
                                <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50 prose !no-underline"
                                    href="{{ route('dashboard.profile') }}">
                                    <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> Profile
                                </a>
                            </div>
                            <hr class="border-gray-50 dark:border-gray-700">
                            <div class="dropdown-item dark:text-gray-100">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50 prose !no-underline"
                                    href="{{ route('logout')}}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout text-16 align-middle mr-1"></i> Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
