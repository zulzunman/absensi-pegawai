<div class="card">
    <div class="card mt-4">
        <div class="card-header" >
            <div class="row" style="margin-top: -18px; margin-bottom: -18px">
                <div class="col-md-6">
                    <h5 class="card-title" >Form Edit Pegawai</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="POST" action="{{ route('pegawai.update', $will->id) }}">
            @method('PUT')
            @csrf
            <div class="col-12">
                <label for="inputNanme4" class="form-label fw-bold">Nama Pegawai</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $will->nama }}">
            </div>
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-success" value="save">Submit</button>
            </div>
        </form>
    <!-- End Default Table Example -->
    </div>
</div>
{{--endcard--}}