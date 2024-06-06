<!-- resources/views/users.blade.php -->
<x-layout-login>
    <x-page-heading>Users</x-page-heading>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="table table-bordered border-success w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-green-500">Name</th>
                    <th class="px-4 py-2 border border-green-500">Email</th>
                    <th class="px-4 py-2 border border-green-500">Department</th>
                    <th class="px-4 py-2 border border-green-500">Designation</th>
                    <th class="px-4 py-2 border border-green-500">Supervisor</th>
                    <th class="px-4 py-2 border border-green-500">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-4 py-2 border border-green-500">{{ $user->name }}</td>
                        <td class="px-4 py-2 border border-green-500">{{ $user->email }}</td>
                        <td class="px-4 py-2 border border-green-500">{{ $user->department->name }}</td>
                        <td class="px-4 py-2 border border-green-500">{{ $user->designation->name }}</td>
                        <td class="px-4 py-2 border border-green-500">{{ $user->supervisor ? $user->supervisor->name : 'N/A' }}</td>
                        <td class="px-4 py-2 border border-green-500">
                            <div class="flex space-x-2">
                                <a href="{{ route('users.edit', $user->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-login>
