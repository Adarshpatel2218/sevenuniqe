<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="myTable">
        @php $i = ($admins->currentPage() - 1) * $admins->perPage() + 1; @endphp
        @if ($admins->isNotEmpty())
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->number }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->status == 1 ? 'Active' : 'In-Active' }}</td>
                    <td>
                        <!-- Action Buttons -->
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">No data found</td>
            </tr>
        @endif
    </tbody>
</table>
@include('vendor.pagination.default', ['page' => $admins->withQueryString()])
