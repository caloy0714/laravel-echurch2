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
        {{ __("You're logged in as Admin!")  }}
        
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a  href="{{ route('admin.user-submissions.index') }}" class="btn btn-primary">
            {{ __("submissions")  }}
            sample
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
