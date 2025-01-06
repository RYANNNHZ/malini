<h1>Users data</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Users data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Start date</th>
                    <th>Status</th>
                    <th>Events</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d F Y') }}</td>
                        <td>{{ $user->is_baned == 0 ? 'not baned' : 'baned' }}</td>
                        <!-- Placeholder jika tidak ada data -->
                        <td class="text-center">
                            <a href="" class=" text-center btn btn-primary"><i
                                class="bi bi-pen"></i></a>
                            <a href="" class=" text-center btn btn-warning"><i
                                class="bi bi-trash"></i></a>
                        </td> <!-- Placeholder jika tidak ada data -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
