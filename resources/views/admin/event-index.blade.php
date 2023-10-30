<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white dark:bg-dark-eval-1 rounded-md shadow-md">
    <div class="py-12">

                    <h1 class="text-3xl font-semibold mb-4">Event List</h1>
                    <x-button :variant="'info'">
                        <a href="{{ route('admin.event-create') }}" class="btn btn-primary">Create Event</a>
                    </x-button>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Start Date</th>
                                <th class="px-4 py-2">End Date</th>
                                <th class="px-4 py-2">Actions</th>
                                <th class="px-4 py-2">Status</th>
                                <!-- <th class="px-4 py-2">Code</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td class="px-4 py-2">{{ $event->id }}</td>
                                <td class="px-4 py-2">{{ $event->title }}</td>
                                <td class="px-4 py-2">{{ $event->start_date }}</td>
                                <td class="px-4 py-2">{{ $event->end_date }}</td>
                                <!-- <td class="px-4 py-2">{{ $event->status ? 'Active' : 'Inactive' }}</td> -->
                                <td class="px-4 py-2">
                                    <x-button>
                                        <a href="{{ route('admin.event-edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                    </x-button>
                                    <form action="{{ route('admin.event-destroy', $event->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <x-button :variant="'danger'">
                                            <a type="submit">Delete</a>
                                        </x-button>
                                    </form>
                                </td>
                                <td class="px-4 py-2">{{ $event->getStatus() }}</td>
                                <!-- <td class="px-4 py-2">RDzwpt6</td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
