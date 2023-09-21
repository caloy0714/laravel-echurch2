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
        <div class="container">
    <h1>User Submissions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Status</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($userSubmissions as $userSubmission)
    <tr>
        <td>{{ $userSubmission->id }}</td>
        <td>{{ $userSubmission->getSubName() }}</td>
        <td>{{ $userSubmission->status }}</td>
        <td>
            <form action="{{ route('admin.user-submissions.update', $userSubmission->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <select name="status" class="form-control black-text">
                    <option value="Pending" {{ $userSubmission->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Ongoing" {{ $userSubmission->status === 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option value="Done" {{ $userSubmission->status === 'Done' ? 'selected' : '' }}>Done</option>
                </select>
                <button type="submit" class="btn btn-primary">Update Status</button>
            </form>
        </td>
        <td>
            <form action="{{ route('admin.user-submissions.update-message', $userSubmission->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <textarea name="message" class="form-control black-text" rows="2">{{ $userSubmission->message }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Message</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

    </table>
</div>
        
            
        </div>
        </div>
    </div>
</div>



</x-app-layout>
