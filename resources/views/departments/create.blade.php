<x-layout>
    <x-page-heading>Add Department</x-page-heading>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <x-forms.form method="POST" action="{{ route('departments.store') }}">
        <x-forms.input label="Department Name" name="name" />

        <x-forms.button> Add Department </x-forms.button>
    </x-forms.form>
</x-layout>
