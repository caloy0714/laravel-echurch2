<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div>
                <h1>Registration Successful</h1>
                <p>Congratulations! Your registration was successful.</p>
                <p>You can now log in and enjoy our services.</p>
                <a href="{{ route('user.dashboard') }}">Back</a>
    </div>
                </div>
    
</x-app-layout>
<script>

jQuery(document).ready( function () {
    jQuery('#myTables').DataTable();
});
</script>