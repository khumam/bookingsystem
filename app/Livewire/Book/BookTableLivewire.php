<?php

namespace App\Livewire\Book;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\DatatableModalTrait;

class BookTableLivewire extends Component
{
    use WithPagination;
    use DatatableModalTrait;

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
        return view('livewire.book.book-table-livewire', [
            'bookings' => Booking::where('name', 'like', '%' . $this->search . '%')->paginate($this->showPage)
        ]);
    }
}
