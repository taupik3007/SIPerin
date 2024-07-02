@extends('master.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Tambah Jurusan </h5>
                        </div>
                        <div>

                        </div>
                    </div>
                    <form action="/fasdf">

                    </form>


                    <form method="post" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="crp_name" class="form-label">Nama Jurusan</label>
                            <input type="text" class="form-control" id="mj_name" name="mjr_name"
                                aria-describedby="mjr_name">
                            @error('mjr_name')
                                <div id="crp_name" class="form-text">{{ $message }}</div>
                            @enderror


                        </div>

                     


                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
