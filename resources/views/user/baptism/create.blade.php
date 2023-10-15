<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fill out Baptism Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <h1 class="text-2xl font-bold mb-4">Baptism Form</h1>
                <form method="POST" action="{{ route('user.baptism.store') }}">
    @csrf

    <div class="mb-4">
        <label for="name_of_child" class="block text-gray-700 text-sm font-bold mb-2">Name of Child:</label>
        <input type="text" name="name_of_child" id="name_of_child" class="form-input" required>
    </div>

    <div class="mb-4">
        <label for="place_of_birth" class="block text-gray-700 text-sm font-bold mb-2">Place of Birth:</label>
        <input type="text" name="place_of_birth" id="place_of_birth" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="father" class="block font-semibold">Father:</label>
        <input type="text" name="father" id="father" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="father_place_of_birth" class="block font-semibold">Father's Place of Birth:</label>
        <input type="text" name="father_place_of_birth" id="father_place_of_birth" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="mother" class="block font-semibold">Mother:</label>
        <input type="text" name="mother" id="mother" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="mother_place_of_birth" class="block font-semibold">Mother's Place of Birth:</label>
        <input type="text" name="mother_place_of_birth" id="mother_place_of_birth" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="kind_of_union" class="block font-semibold">Kind of Union of Parents:</label>
        <select name="kind_of_union" id="kind_of_union" class="form-select" required>
            <option value="Catholic">Catholic</option>
            <option value="Civil">Civil</option>
            <option value="Protestant">Protestant</option>
            <option value="Aglipayan">Aglipayan</option>
        </select>
    </div>

    <div class="my-4">
        <label for="date_of_birth" class="block font-semibold">Date of Birth:</label>
        <input type="date" name="date_of_birth" id="date_of_birth" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="date_of_baptism" class="block font-semibold">Date of Baptism:</label>
        <input type="date" name="date_of_baptism" id="date_of_baptism" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="godfather" class="block font-semibold">Godfather:</label>
        <input type="text" name="godfather" id="godfather" class="form-input" required>
    </div>
    	
    <div class="my-4">
        <label for="residence_of_godfather" class="block font-semibold">Residence of Godfather:</label>
        <input type="text" name="residence_of_godfather" id="residence_of_godfather" class="form-input" required>
    </div>
    <div class="my-4">
        <label for="godmother" class="block font-semibold">Godmother:</label>
        <input type="text" name="godmother" id="godmother" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="residence_of_godmother" class="block font-semibold">Residence of Godmother:</label>
        <input type="text" name="residence_of_godmother" id="residence_of_godmother" class="form-input" required>
    </div>

    <div class="my-4">
        <label for="other_sponsors" class="block font-semibold">Other Sponsors:</label>
        <textarea name="other_sponsors" id="other_sponsors" class="form-textarea" rows="4" required></textarea>
    </div>

    <div class="mb-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit Baptism Form
        </button>
    </div>
</form>


            </div>
        </div>
    </div>
</x-app-layout>
