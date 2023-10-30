<div class="grid grid-cols-1 mb-5">
    <div class="block md:flex items-center justify-between">
        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100 prose">{{ $title }}</h4>
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard.index') }}" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white prose">
                        Dashboard
                    </a>
                </li>
                {{ $slot }}
            </ol>
        </nav>
    </div>
</div>
