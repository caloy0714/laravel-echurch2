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

        <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in as Admin!")  }}<br>
        
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-button><a  href="{{ route('admin.user-submissions.index') }}" class="btn btn-primary">
            {{ __("Submissions")  }} </x-button>    
        </div>
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-button>
            <a href="{{ route('export-user-submissions') }}" class="btn btn-primary">Export User Mass Intention</a>
        </x-button>
        </div>
    </div>
    </div>
</div>
<script>

jQuery(document).ready( function () {
    jQuery('#myTables').DataTable();
});
</script>


</x-app-layout>
