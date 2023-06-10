<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
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
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->description }}</td>
                    <td>

                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Action <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                @can('news-list.edit')
                                    <a class="dropdown-item" onclick="showNewsEditModal(event)"
                                        href="{{ route('news-list.edit', $row->id) }}">Edit</a>
                                @endcan

                                @can('news-list.destroy')
                                    <a class="dropdown-item"
                                        onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                        Delete</a>
                                    <form id="delete-{{ $row->id }}"
                                        action="{{ route('news-list.destroy', $row->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                    </form>
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
