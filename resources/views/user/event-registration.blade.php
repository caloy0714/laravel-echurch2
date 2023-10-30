<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black-800 leading-tight">
            <!-- {{ __('User Registration') }} -->
        </h2>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white dark:bg-dark-eval-1 rounded-md shadow-md ">
        <div class="py-12">
            <h1 class="text-3xl font-semibold mb-4">User Registration</h1>
            <form method="POST" action="{{ route('user.submit-registration') }}">
                @csrf

                <div class="my-4">
                    <label for="name" class="block text-black-700 text-sm font-bold mb-2">Your Name:</label>
                    <input type="text" name="name" id="name" class="form-input" style="color: black;" required>
                </div>

                <div class="my-4">
                    <label for="event" class="block text-black-700 text-sm font-bold mb-2">Select Mass Intention:</label>
                    <select name="event" id="event" class="form-select" style="color: black;" required>
                        @foreach($events as $event)
                            @if($event->status == 1)
                                <option value="{{ $event->id }}">
                                    {{ $event->title }} ({{ $event->getSDate() }} - {{ $event->getEDate() }})
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="my-4">
                    <label for="names" class="block text-black-700 text-sm font-bold mb-2">Enter name/s of who will receive the Mass (comma-separated):</label><br>
                    <textarea name="names" id="names" class="form-textarea" rows="4" style="color: black;" required></textarea>
                </div>

                <div class="mb-4">
                    <x-button>
                        {{ __('Submit') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
