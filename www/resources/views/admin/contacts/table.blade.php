<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @if (count($tableData) == 0)
            <tr>
                <td colspan="3" class="text-center">
                    <h3>No Data Found</h3>
                </td>
            </tr>
        @else
            @foreach ($tableData as $key => $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>

                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Action <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                @can('news-list.edit')
                                    <a class="dropdown-item" onclick="showContactViewModal(event)"
                                        href="{{ route('contacts.show', $row->id) }}">View</a>
                                @endcan
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{ $tableData->links() }}
