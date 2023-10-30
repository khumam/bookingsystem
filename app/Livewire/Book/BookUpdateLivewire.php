<?php

namespace App\Livewire\Book;

use App\Models\Booking;
use Carbon\Carbon;
use Livewire\Component;

class BookUpdateLivewire extends Component
{
    public $id;
    public $name;
    public $notes;
    public $date;
    public $start;
    public $end;
    public $contact;
    public $duration;

    public $noteList = [
        ['name' => 'Lapangan 1'],
        ['name' => 'Lapangan 2']
    ];

    public $price = 30000;

    protected $rules = [
        'name' => 'required',
        'notes' => 'required',
        'date' => 'required',
        'start' => 'required',
        'end' => 'required',
        'contact' => 'required',
        'duration' => 'required',
    ];

    public function mount()
    {
        $user = Booking::find($this->id);
        $this->name = $user->name;
        $this->notes = $user->notes;
        $this->date = Carbon::parse($user->date)->format('Y-m-d');
        $this->start = $user->start;
        $this->end = $user->end;
        $this->contact = $user->contact;
        $this->duration = $user->duration;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        try {
            Booking::where('id', $this->id)->update([
                'name' => $this->name,
                'notes' => $this->notes,
                'date' => $this->date,
                'start' => $this->start,
                'end' => $this->end,
                'contact' => $this->contact,
                'total_price' => $this->price * $this->duration,
                'duration' => $this->duration
            ]);
            return redirect()->route('dashboard.booking.index')->with('success', 'Book updated successfuly');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update new book' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.book.book-update-livewire');
    }
}
