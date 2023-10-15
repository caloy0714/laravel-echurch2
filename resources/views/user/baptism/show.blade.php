<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Baptism Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <h1 class="text-2xl font-bold mb-4">Baptism Form</h1>

                <div class="mb-4">
                    <strong>Name of Child:</strong> {{ $baptismForm->name_of_child }}
                </div>

                <div class="mb-4">
                    <strong>Place of Birth:</strong> {{ $baptismForm->place_of_birth }}
                </div>

                <div class="mb-4">
                    <strong>Father:</strong> {{ $baptismForm->father_name }}
                </div>

                <div class="mb-4">
                    <strong>Father's Place of Birth:</strong> {{ $baptismForm->father_birthplace }}
                </div>

                <div class="mb-4">
                    <strong>Mother:</strong> {{ $baptismForm->mother_name }}
                </div>

                <div class="mb-4">
                    <strong>Mother's Place of Birth:</strong> {{ $baptismForm->mother_birthplace }}
                </div>

                <div class="mb-4">
                    <strong>Kind of Union of Parents:</strong> {{ $baptismForm->union_of_parents }}
                </div>

                <div class="mb-4">
                    <strong>Date of Birth:</strong> {{ $baptismForm->date_of_birth }}
                </div>

                <div class="mb-4">
                    <strong>Date of Baptism:</strong> {{ $baptismForm->date_of_baptism }}
                </div>

                <div class="mb-4">
                    <strong>Godfather:</strong> {{ $baptismForm->godfather_name }}
                </div>

                <div class="mb-4">
                    <strong>Residence of Godfather:</strong> {{ $baptismForm->godfather_residence }}
                </div>

                <div class="mb-4">
                    <strong>Godmother:</strong> {{ $baptismForm->godmother_name }}
                </div>

                <div class="mb-4">
                    <strong>Residence of Godmother:</strong> {{ $baptismForm->godmother_residence }}
                </div>

                <div class="mb-4">
                    <strong>Other Sponsors:</strong> {{ $baptismForm->other_sponsors }}
                </div>

                <div class="mb-4">
                    <strong>Status:</strong> {{ $baptismForm->status }}
                </div>

                <div class="mb-4">
                    <strong>Admin Message:</strong> {{ $baptismForm->admin_message }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
