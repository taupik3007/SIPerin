@extends('master.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Tambah Kelas</h5>
                        </div>
                        <div>

                        </div>
                    </div>
                    <form action=""></form>
                    <form method="post" action="">
                    @csrf
                        <div class="mb-3">
                            <label for="Select" class="form-label">Tingkatan Kelas</label>
                            <select id="Select" name="cls_level" class="form-select">
                                <option value=""></option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                            @error('cls_level')
                                <div id="cls_id" class="form-text">{{ $message }}</div>
                            @enderror

                        </div>

                        <form method="post" action="">
                        <div class="mb-3">
                            <label for="Select" class="form-label">Jurusan</label>
                            <select id="Select" name="mjr_id" class="form-select">
                            @foreach ($major as $major)
                              <option value="{{ $major->mjr_id }}">{{ $major->mjr_name }}</option>
                            @endforeach
                            </select>
                            @error('cls_level')
                                <div id="cls_id" class="form-text">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="crp_name" class="form-label">Nomor Kelas</label>
                            <input type="number" class="form-control" id="cls_number" name="cls_number"
                                aria-describedby="cls_number">
                            @error('cls_number')
                                <div id="cls_id" class="form-text">{{ $message }}</div>
                            @enderror


                        </div>


                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
