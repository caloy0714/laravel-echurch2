<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2 class="text-xl font-semibold leading-tight">
            {{ __('update Baptism Form') }}
            </h2>
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
    <div class="container">
    <h1>Update Baptism Form Status and Leave Messages</h1>
    <form action="{{ route('admin.baptism-forms.update-all') }}" method="POST">
        @csrf
        @method('PATCH')
        <table>
            <thead>
                <tr>
                    <th>Name of Child</th>
                    <th>Status</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($baptismForms as $form)
                    <tr>
                        <td>{{ $form->name_of_child }}</td>
                        <td>
                            <select name="statuses[{{ $form->id }}]">
                                <option value="Pending" {{ $form->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Ongoing" {{ $form->status === 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                <option value="Done" {{ $form->status === 'Done' ? 'selected' : '' }}>Done</option>
                            </select>
                        </td>
                        <td>
                            <textarea name="messages[{{ $form->id }}]">{{ $form->message }}</textarea>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit">Update</button>
    </form>

    
</div>
            </div>
        </div>
    </div>
</x-app-layout>
