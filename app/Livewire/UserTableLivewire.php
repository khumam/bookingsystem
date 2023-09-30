<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTableLivewire extends Component
{
    use WithPagination;
    public $showPage = 5;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }

    public function render()
    {
        return view('livewire.user-table-livewire', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->paginate($this->showPage)
        ]);
    }
}
