<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white dark:bg-dark-eval-1 rounded-md shadow-md">
    {{ __("You're logged in as Admin!") }}<br>

    <div class="flex flex-row gap-4">
        <div class="bg-blue-200 p-4 rounded-md text-black dark:text-black">
            <h4 class="text-xl font-semibold">Pending Mass Intention</h4>
            <p class="text-2xl">{{ $statuses['Pending'] }}</p>
        </div>
        <div class="bg-green-200 p-4 rounded-md text-black dark:text-black">
            <h4 class="text-xl font-semibold">Ongoing Mass Intention</h4>
            <p class="text-2xl">{{ $statuses['Ongoing'] }}</p>
        </div>
        <div class="bg-yellow-200 p-4 rounded-md text-black dark:text-black">
            <h4 class="text-xl font-semibold">Done Mass Intention</h4>
            <p class="text-2xl">{{ $statuses['Done'] }}</p>
        </div>
    </div>

    <x-button>
        <a href="{{ route('export-user-submissions') }}" class="btn btn-primary">Export User Mass Intention</a>
    </x-button>
</div>

</x-app-layout>
