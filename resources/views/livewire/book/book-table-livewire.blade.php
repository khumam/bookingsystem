<div>
  <div class="grid grid-cols-12 mb-5 space-x-3">
    <div class="col-span-3 md:col-span-1 prose">
      <label class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Per page</label>
      <select wire:model.live="showPage" class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100">
        <option>5</option>
        <option>10</option>
        <option>25</option>
        <option>50</option>
      </select>
    </div>
    <div class="md:col-span-3 col-span-9 prose">
      <label class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Search</label>
      <input wire:model.live="search" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="Search you data">
    </div>
  </div>

    <div class="table-rep-plugin">
      <div class="table-wrapper overflow-auto">
          <div class="table-responsive mb-0 fixed-solution" data-pattern="priority-columns">
            <table class="table table-striped w-full text-left border border-gray-50 dark:border-zinc-600">
              <thead>
                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/50 dark:bg-zinc-700/50 dark:text-zinc-100">
                  <th class="p-3">No.</th>
                  <th class="p-3">Date</th>
                  <th class="p-3">Time</th>
                  <th class="p-3">Name</th>
                  <th class="p-3">Contact</th>
                  <th class="p-3">Total Price</th>
                  <th class="p-3" width="100px">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($bookings as $booking)
                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-zinc-100 bg-white prose" wire:key="{{ $booking->id }}">
                  <td class="p-3" width="50">{{ ($bookings->currentpage()-1) * $bookings->perpage() + $loop->index + 1 }}</td>
                  <td class="p-3">{{ \Carbon\Carbon::parse($booking->date)->format('d F, Y') }}</td>
                  <td class="p-3">{{ \Carbon\Carbon::parse($booking->start)->format('H:m') }} s.d {{ \Carbon\Carbon::parse($booking->end)->format('H:m') }}</td>
                  <td class="p-3">{{ $booking->name }}</td>
                  <td class="p-3">{{ $booking->contact }}</td>
                  <td class="p-3">{{ number_format($booking->total_price) }}</td>
                  <td class="p-3 flex">
                    <a href="{{ route('dashboard.booking.edit', $booking->id) }}" class="p-2 bg-amber-400 hover:bg-amber-300 rounded-tl rounded-bl no-underline">
                        <i class="bx bx-edit"></i>
                    </a>
                    <button wire:click="showModal('dashboard.booking.destroy', {{ $booking->id }})" class="p-2 bg-rose-600 hover:bg-rose-700 rounded-tr rounded-br text-white">
                        <div class="bx bx-trash"></div>
                    </button>
                  </td>
                </tr>
                @empty
                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-zinc-100 bg-red-50/50">
                  <td class="p-3 text-center" colspan="6">We can't find what you are looking for</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
      </div>
    </div>
    <div class="my-5">
        {{ $bookings->onEachSide(1)->links() }}
    </div>
    <x-datatable.modal :isModalShow="$isModalShow" :deleteRoute="$deleteRoute"></x-datatable.modal>
</div>
