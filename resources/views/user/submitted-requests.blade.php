<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1>My Submitted Requests</h1>

        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Status</th>
            <th>Event</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userSubmissions as $userSubmission)
        <tr>
            <td>{{ $userSubmission->id }}</td>
            <td>{{ $userSubmission->getStatus() }}</td>
            <td>{{ $userSubmission->event->title }}</td>
            <td>{{ $userSubmission->event->start_date }}</td>
            <td>{{ $userSubmission->event->end_date }}</td>
            <td>{{ $userSubmission->getMessage() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myDataTable').DataTable();
    });
</script>
