<div class="card">
    <div class="card mt-4">
        <div class="card-header" >
            <div class="row" style="margin-top: -18px; margin-bottom: -18px">
                <div class="col-md-6">
                    <h5 class="card-title" >Form Barang Keluar</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="POST" action="{{ route('wilayah.store') }}">
            @csrf
            <div class="col-12">
                <label for="inputNanme4" class="form-label fw-bold">Nama Wilayah</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-success" value="save">Submit</button>
            </div>
        </form>
    <!-- End Default Table Example -->
    </div>
</div>
{{--endcard--}}