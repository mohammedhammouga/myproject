@extends('admin.layoute') {{-- Corrected the layout name --}}

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0">Contacts List</h5>
        </div>

        @if($user->isEmpty())
            <p>No contacts found.</p>
        @else 
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>city</th>
                            <th>Special</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $user)
                            <tr>
                                <td>{{ $user->id }}</td> 
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->special }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <!-- Add actions here like Edit, Delete -->
                                    <form action="{{ route('alluser.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE') 
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif 
    </div>
</div>
@endsection
