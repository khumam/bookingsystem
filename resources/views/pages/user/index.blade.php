<x-app-layout>
    <x-breadcrumb>
        <x-slot name="title">User management</x-slot>
        <x-breadcrumb-item>User management</x-breadcrumb-item>
    </x-breadcrumb>

    <div class="card dark:border-zinc-600 dark:bg-zinc-800">
        <div class="card-body pb-0">
            <h5 class="dark:text-zinc-100">User data</h5>
        </div>
        <div class="card-body">
            <livewire:user-table-livewire></livewire:user-table-livewire>
        </div>
    </div>
</x-app-layout>
