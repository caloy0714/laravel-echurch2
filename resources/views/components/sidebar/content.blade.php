<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

<x-sidebar.link
    title="Dashboard"
    :href="auth()->user()->usertype === 'admin' ? route('admin.admindashboard') : route('user.dashboard')"
    :isActive="request()->routeIs('dashboard')"
>
    <x-slot name="icon">
        <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
    </x-slot>
</x-sidebar.link>


    <!-- <x-sidebar.dropdown
        title="Testing"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Text button"
            href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')"
        />
        <x-sidebar.sublink
            title="Icon button"
            href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')"
        />
        <x-sidebar.sublink
            title="Text with icon"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
    </x-sidebar.dropdown> -->

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        
    </div>

    @if (auth()->user()->usertype === 'admin')
    <!-- Admin-specific sidebar links -->
    <x-sidebar.link title="Users" href="{{ route('admin.displayUser') }}"/>
    <x-sidebar.link title="Mass Intention Submission" href="{{ route('admin.user-submissions.index') }}"/>
    <x-sidebar.link title="Events" href="{{ route('admin.event-index') }}"/>
    <x-sidebar.link title="Baptism" href="{{ route('admin.baptism-forms.update-all') }}"/>

@else
    <!-- User-specific sidebar links -->
    <x-sidebar.link
    title="Create Baptism Form"
    href="{{ route('user.baptism.create') }}"
    :isActive="request()->routeIs('user.baptism.create')"
/>
<x-sidebar.link
    title="View Baptism Form"
    href="{{ route('user.baptism.show', ['id' => auth()->user()->id]) }}"
    :isActive="request()->routeIs('user.baptism.show')"
/>

<x-sidebar.link
    title="Register for Event"
    href="{{ route('user.event-registration') }}"
    :isActive="request()->routeIs('user.event-registration')"
/>
<x-sidebar.link
    title="View Request"
    href="{{ route('user.submitted-requests') }}"
    :isActive="request()->routeIs('user.submitted-requests')"
/>

@endif


</x-perfect-scrollbar>
