<x-layout-login>
    <x-page-heading>User List</x-page-heading>

    <div class="overflow-x-auto">
        <table class="table table-bordered border-success">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-green-500">Name</th>
                    <th class="px-4 py-2 border border-green-500">Email</th>
                    <th class="px-4 py-2 border border-green-500">Department</th>
                    <th class="px-4 py-2 border border-green-500">Designation</th>
                    <th class="px-4 py-2 border border-green-500">Supervisor</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-login>
