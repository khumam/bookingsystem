<?php

namespace App\Livewire\Book;

use App\Models\Booking;
use Livewire\Component;

class BookCreateLivewire extends Component
{
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        try {
            Booking::create([
                'name'=> $this->name,
                'notes'=> $this->notes,
                'date'=> $this->date,
                'start'=> $this->start,
                'end'=> $this->end,
                'contact'=> $this->contact,
                'total_price'=> $this->price * $this->duration,
                'duration'=> $this->duration
            ]);
            return redirect()->route('dashboard.booking.index')->with('success','Book created successfuly');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add new booking');
        }
    }

    public function render()
    {
        return view('livewire.book.book-create-livewire');
    }
}
