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
                <div class="container">
                    <h1>User Registration</h1>
                    <form action="{{ route('user.submit-registration') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="event">Select Active Event</label>
                            <select id="event" name="event" class="form-control" required>
                                @foreach($events as $event)
                                
                                    @if($event->status == 1)
                                        <option value="{{ $event->id }}">{{ $event->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="names">Enter Multiple Names (comma-separated)</label>
                            <textarea class="form-control" id="names" name="names" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
    
</x-app-layout>
<script>

jQuery(document).ready( function () {
    jQuery('#myTables').DataTable();
});
</script>