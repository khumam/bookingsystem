<x-app-layout>
    <x-breadcrumb>
        <x-slot name="title">Book management</x-slot>
        <x-breadcrumb-item>Book management</x-breadcrumb-item>
        <x-breadcrumb-item>Update book</x-breadcrumb-item>
    </x-breadcrumb>

    <div class="card dark:border-zinc-600 dark:bg-zinc-800 bg-slate-50 w-full md:w-1/2">
        <div class="card-body pb-4 border-b border-slate-200">
            <h5 class="dark:text-zinc-100">Update book</h5>
        </div>
        <div class="card-body">
            <div class="w-full">
                <livewire:book.book-update-livewire :id="$id"></livewire:book.book-update-livewire>
            </div>
        </div>
    </div>
</x-app-layout>
