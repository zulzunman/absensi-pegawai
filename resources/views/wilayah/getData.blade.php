<!-- Default Table -->
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Wilayah</th>
        <th scope="col" class="">Action</th>
    </tr>
    </thead>
    <tbody style="background-color: #f4f8fb">
        @foreach ($wilayah as $item)
        <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>
        <td>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#ModalEdit-{{ $item->id }}" class="badge bg-warning text-dark" style="text-decoration: none;">edit</a>
            {{-- <a href="#!" data-bs-toggle="modal" data-bs-target="#ModalEdit-{{ $item->id }}" class="badge bg-warning text-dark" style="text-decoration: none;"><i class="bi bi-pencil"></i></a> --}}
            {{-- <a class="badge bg-danger" style="text-decoration: none;"><i data-feather="edit"></i>
                <form action="{{ route('wilayah.destroy', $item->id ) }}" method="post" id="deleteForm{{ $item->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="bg-danger border-0 text-white delete-button" data-form-id="deleteForm{{ $item->id }}"><i class="bi bi-trash"></i></button>
                </form>
            </a> --}}
        </td>
        </tr>
    @endforeach
    </tbody>
</table>