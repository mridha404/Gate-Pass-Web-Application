<x-layout-add-user>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart-form-data">
        <x-forms.input label=" Name" name="name" />
        <x-forms.input label=" Email" name="email" type="email" />
        <x-forms.input label=" Password" name="password" type="password" />
        <x-forms.input label=" Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.divider/>

        <x-forms.select label="Department" name="department_id">
            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </x-forms.select>

        <x-forms.select label="Designation" name="designation_id">
            @foreach($designations as $designation)
                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
            @endforeach
        </x-forms.select>

        <x-forms.select label="Supervisor" name="supervisor_id">
            <option value="">None</option>
            @foreach($supervisors as $supervisor)
                <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
            @endforeach
        </x-forms.select>





        <x-forms.button> Create Account </x-forms.button>

        





    </x-forms.form>



</x-layout-add-user>
