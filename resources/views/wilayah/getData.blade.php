<!-- Default Table -->
<div>
    <a href="{{ route('wilayah.add')}}">add</a>
</div>
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
            <a href="{{ route('wilayah.edit', $item->id)}}">edit</a>
        </td>
        <td>
            <form action="{{ route('wilayah.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            {{-- <a href="{{ route('wilayah.destroy', $item->id)}}">delete</a> --}}
        </td>
        </tr>
    @endforeach
    </tbody>
</table>