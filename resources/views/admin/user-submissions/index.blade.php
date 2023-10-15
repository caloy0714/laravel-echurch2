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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
            <h1>User Submissions</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th class="px-4">ID</th>
                        <th class="px-4">User Name</th>
                        <th class="px-4">Status</th>
                        <th class="px-4">Message</th>
                        <th class="px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userSubmissions as $userSubmission)
                    <tr>
                        <td class="px-4">{{ $userSubmission->id }}</td>
                        <td class="px-4">{{ $userSubmission->getSubName() }}</td>
                        <td class="px-4">{{ $userSubmission->status }}</td>
                        <td class="px-4">
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
                        <td class="px-4">
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
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
