<x-layout>
    <x-page-heading>Add Designation</x-page-heading>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <x-forms.form method="POST" action="{{ route('designations.store') }}">
        <x-forms.input label="Designation Name" name="name" />

        <x-forms.button> Add Designation </x-forms.button>
    </x-forms.form>
</x-layout>
