<div>
    Form
    <form wire:submit.prevent="submit">
        <div>
            <div>
                <input wire:model="city" type="text" id="inputCity" placeholder="Type your destination...">
            </div>
            <div>
                <input wire:model="checkIn" type="date" id="inputCheckIn" placeholder="Check In">
            </div>
            <div>
                <input wire:model="checkOut" type="date" id="inputCheckOut" placeholder="Check Out">
            </div>
            <div>
                <button type="submit">Check Availability</button>
            </div>
        </div>
        <!-- ... (rest of the form) -->
    </form>
</div>
