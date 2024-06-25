<!-- resources/views/users/edit.blade.php -->
<x-layout>
    <x-page-heading>Edit User</x-page-heading>

    <x-forms.form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-forms.input label="Name" name="name" :value="$user->name" />
        <x-forms.input label="Email" name="email" type="email" :value="$user->email" />
        <x-forms.input label="Password (leave blank to keep current)" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.select label="Department" name="department_id">
            @foreach($departments as $department)
                <option value="{{ $department->id }}" {{ $user->department_id == $department->id ? 'selected' : '' }}>
                    {{ $department->name }}
                </option>
            @endforeach
        </x-forms.select>

        <x-forms.select label="Designation" name="designation_id">
            @foreach($designations as $designation)
                <option value="{{ $designation->id }}" {{ $user->designation_id == $designation->id ? 'selected' : '' }}>
                    {{ $designation->name }}
                </option>
            @endforeach
        </x-forms.select>

        <x-forms.select label="Supervisor" name="supervisor_id">
            <option value="">None</option>
            @foreach($supervisors as $supervisor)
                <option value="{{ $supervisor->id }}" {{ $user->supervisor_id == $supervisor->id ? 'selected' : '' }}>
                    {{ $supervisor->name }}
                </option>
            @endforeach
        </x-forms.select>

        <x-forms.button>Update User</x-forms.button>
    </x-forms.form>
</x-layout>
