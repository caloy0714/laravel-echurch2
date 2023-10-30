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

                <h1 class="text-2xl font-bold mb-4">Baptism Form</h1>
                
                @if ($baptismForm)
                <div class="mb-4">
                    <p>Name of Child: {{ $baptismForm->name_of_child }}</p>
                </div>

                <div class="mb-4">
                    <strong>Place of Birth:</strong> {{ $baptismForm->place_of_birth }}
                </div>

                <div class="mb-4">
                    <strong>Father:</strong> {{ $baptismForm->father }}
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
                    <strong>Admin Message:</strong> {{ $baptismForm->message }}
                </div>

                @else
            <p>No Baptism Form submitted.</p>
        @endif

            </div>
        </div>
    </div>
</x-app-layout>
