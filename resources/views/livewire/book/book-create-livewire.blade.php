<div>
    <x-flash-notification></x-flash-notification>
    <form wire:submit.prevent="submit" class="prose">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model.live="name" id="password" class="block mt-1 w-full" type="text" name="name"
                placeholder="Name" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="contact" :value="__('Contact')" />
            <x-text-input wire:model.live="contact" id="contact" class="block mt-1 w-full" type="text" name="contact"
                placeholder="Contact" required />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="date" :value="__('Date')" />
            <x-text-input wire:model.live="date" id="date" class="block mt-1 w-full" type="date" name="date"
                placeholder="Contact" required />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="mt-4">
                <x-input-label for="start" :value="__('Start')" />
                <x-text-input wire:model.live="start" id="start" class="block mt-1 w-full" type="time" name="start"
                    placeholder="Contact" required />
                <x-input-error :messages="$errors->get('start')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="end" :value="__('End')" />
                <x-text-input wire:model.live="end" id="end" class="block mt-1 w-full" type="time" name="end"
                    placeholder="Contact" required />
                <x-input-error :messages="$errors->get('end')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="duration" :value="__('Duration')" />
                <x-text-input wire:model.live="duration" id="duration" class="block mt-1 w-full" type="number" name="duration"
                    placeholder="Duration" max="24" required />
                <x-input-error :messages="$errors->get('duration')" class="mt-2" />
            </div>
        </div>
        <div class="mt-4">
            <x-input-label for="notes" :value="__('Notes')" />
            <x-select-input :options="$noteList" :value="'name'" :label="'name'" name="notes" id="notes" wire:model.live="notes"></x-select-input>
            <x-input-error :messages="$errors->get('notes')" class="mt-2" />
        </div>
        <div class="mt-4">
            <button class="bg-emerald-500 px-6 py-3 text-white rounded" type="submit">Add new booking</button>
        </div>
    </form>
</div>
