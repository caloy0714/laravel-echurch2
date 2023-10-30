<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white dark:bg-dark-eval-1 rounded-md shadow-md">
        {{ __("You're logged in as Admin!") }}<br>
        <div class="py-12">
        <h1 class="text-3xl font-semibold my-4">User Submissions</h1>
        <table id="myTable" class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">User Name</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Message</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userSubmissions as $userSubmission)
                <tr>
                    <td class="px-4 py-2">{{ $userSubmission->id }}</td>
                    <td class="px-4 py-2">{{ $userSubmission->getSubName() }}</td>
                    <td class="px-4 py-2">{{ $userSubmission->status }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.user-submissions.update', $userSubmission->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="form-select text-black">
                                <option value="Pending" {{ $userSubmission->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Ongoing" {{ $userSubmission->status === 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                <option value="Done" {{ $userSubmission->status === 'Done' ? 'selected' : '' }}>Done</option>
                            </select>
                            <x-button>
                                <a type="submit" class="btn btn-primary">Update Status</a>
                            </x-button>
                        </form>
                    </td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.user-submissions.update-message', $userSubmission->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <textarea name="message" class="form-textarea text-black" rows="2">{{ $userSubmission->message }}</textarea>
                            </div>
                            <x-button>
                                <a type="submit" class="btn btn-primary">Update Message</a>
                            </x-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

@push('scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
@endpush