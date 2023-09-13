<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <!-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> -->
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in as Users!")  }}
        <script>
        function addNameField() {
            var input = document.createElement("input");
            input.type = "text";
            input.name = "participantName[]";
            input.placeholder = "Participant's Name";
            document.getElementById("namesContainer").appendChild(input);
        }
    </script>
</head>
<body>
    <h1>Event Booking Form</h1>
    <form action="process_form.php" method="POST">
        <label for="userName">Your Name:</label>
        <input type="text" id="userName" name="userName" required><br><br>

        <label for="eventSelection">Select Event:</label>
        <select id="eventSelection" name="eventSelection" required>
            <option value="event1">Event 1</option>
            <option value="event2">Event 2</option>
            <option value="event3">Event 3</option>
            <!-- Add more event options as needed -->
        </select><br><br>

        <label for="timeSlot">Select Time Slot:</label>
        <input type="radio" id="morningSlot" name="timeSlot" value="morning" required>
        <label for="morningSlot">Morning</label>
        <input type="radio" id="afternoonSlot" name="timeSlot" value="afternoon" required>
        <label for="afternoonSlot">Afternoon</label><br><br>

        <label for="participantNames">Participant Names:</label>
        <div id="namesContainer">
            <input type="text" name="participantName[]" placeholder="Participant's Name" required>
        </div>
        <button type="button" onclick="addNameField()">Add Participant</button><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
    </div>
    
</x-app-layout>
