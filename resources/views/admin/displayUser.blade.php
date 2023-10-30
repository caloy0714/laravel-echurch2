<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white dark:bg-dark-eval-1 rounded-md shadow-md">
        <!-- {{ __("You're logged in as Admin!") }}<br> -->
        <div class="py-12">
            <h1 class="text-3xl font-semibold my-4">Users List</h1>
            <table id="myTables" class="display">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">User Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="px-4 py-2">{{ $user->getId() }}</td>
                        <td class="px-4 py-2">{{ $user->getName() }}</td>
                        <td class="px-4 py-2">{{ $user->getEmail() }}</td>
                        <td class="px-4 py-2">{{ $user->getUsertype() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
<script>
    jQuery(document).ready(function () {
        jQuery('#myTables').DataTable();
    });
</script>
