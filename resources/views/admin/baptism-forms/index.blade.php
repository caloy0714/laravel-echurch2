<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2 class="text-xl font-semibold leading-tight">
            {{ __('View Baptism Form') }}
            </h2>
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
    <div class="container">
        <h1>Submitted Baptism Forms</h1>

        <table>
            <thead>
                <tr>
                    <th>Name of Child</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($baptismForms as $form)
                    <tr>
                        <td>{{ $form->name_of_child }}</td>
                        <td>{{ $form->status }}</td>
                        <td>
                            <a href="{{ route('admin.baptism-forms.update-status', $form->id) }}">Update Status</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

            </div>
        </div>
    </div>
</x-app-layout>
