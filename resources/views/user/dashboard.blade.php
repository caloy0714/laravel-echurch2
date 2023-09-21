<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __(' User Dashboard') }}
            </h2>

        </div>
    </x-slot>
    
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in as Usersss!")  }}
       <br> <a href="{{ route('user.event-registration') }}" class="btn btn-primary">
            {{ __('Register for Event') }}
        </a>
        <br><a href="{{ route('user.submitted-requests') }}" class="btn btn-primary">
            {{ __('View Request') }}
        </a>
    </div>
</x-app-layout>
