@extends('master.main')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Tambah Perusahaan</h5>
                </div>
                <div>
                   
                </div>
            </div>
            <form method="post" action="">
                @csrf
                <div class="mb-3">
                  <label for="crp_name" class="form-label">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="crp_name" name="crp_name" aria-describedby="crp_name">
                  @error('crp_sector') <div id="crp_name" class="form-text">{{$message}}</div> @enderror

                  
                </div>
                <div class="mb-3">
                  <label for="crp_sector" class="form-label">Bidang Perusahaan</label>
                  <input type="crp_sector" class="form-control" name="crp_sector" id="crp_sector">
                  @error('crp_sector') <div id="crp_name" class="form-text">{{$message}}</div> @enderror

                </div>
                <div class="mb-3">
                    <label for="Select"  class="form-label">Sytem Kerja</label>
                    <select id="Select" name="crpp_work_system" class="form-select">
                      <option value=""></option>
                      <option value="WFO">WFO</option>
                      <option value="WFH">WFH</option>
                      <option value="Hybrid">Hybrid</option>
                    </select>
                  @error('crpp_work_system') <div id="crp_name" class="form-text">{{$message}}</div> @enderror

                  </div>

                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

</div>

@endsection