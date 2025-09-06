@extends('admin.layouts.base')
@section('title', 'Edit Center')
@push('custom-css')

@endpush
@section('content')
<!-- end page title -->
<div class="row mt-3">
    <div class="col-lg-12">
        <form id="update_frm" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header bg-secondary text-white font-weight-bold">
                    Edit Center
                    <span class="float-right" style="float:right">
                        <a href="{{ route('center_list') }}">
                            <button type="button" class="btn btn-dark btn-sm"> View All </button>
                        </a>
                        <button class="btn btn-success btn-sm" id="update_btn" accesskey="s"> UPDATE </button>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- Center Name --}}
                        <div class="col-md-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Name</label>
                                <input required class="form-control" placeholder="Center Name"
                                    type="text" name="center_name"
                                    value="{{ old('center_name', $data->cl_center_name ?? '') }}">
                            </div>
                        </div>
                        {{-- Director Name --}}
                        <div class="col-md-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Director Name</label>
                                <input required class="form-control" placeholder="Director Name"
                                    type="text" name="director_name"
                                    value="{{ old('director_name', $data->cl_director_name ?? '') }}">
                            </div>
                        </div>
                        {{-- Address --}}
                        <div class="col-md-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Address</label>
                                <input required class="form-control" placeholder="Address"
                                    type="text" name="center_address"
                                    value="{{ old('center_address', $data->cl_center_address ?? '') }}">
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="col-md-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Email</label>
                                <input required class="form-control" placeholder="Email"
                                    type="email" name="center_email"
                                    value="{{ old('center_email', $data->cl_email ?? '') }}">
                            </div>
                        </div>
                        {{-- Mobile --}}
                        <div class="col-md-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Mobile</label>
                                <input required class="form-control" placeholder="Mobile"
                                    type="number" name="center_mobile"
                                    value="{{ old('center_mobile', $data->cl_mobile ?? '') }}">
                            </div>
                        </div>
                        {{-- Photo --}}
                        <div class="col-md-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="photo">
                                @if(!empty($data->cl_photo))
                                    <img src="{{ asset('storage/'.$data->cl_photo) }}" alt="Photo" class="preview-img">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="background: #74788d;padding: 9px;color: #fff;font-size: 14px;">Center Document</h5>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Center Stamp --}}
                        <div class="col-lg-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Stamp</label>
                                <input class="form-control" type="file" name="center_stamp">
                                @if(!empty($data->cl_center_stamp))
                                    <img src="{{ asset('storage/'.$data->cl_center_stamp) }}" alt="Stamp" class="preview-img">
                                @endif
                            </div>
                        </div>
                        {{-- Center Signature --}}
                        <div class="col-lg-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Center Signature</label>
                                <input class="form-control" type="file" name="center_signature">
                                @if(!empty($data->cl_center_signature))
                                    <img src="{{ asset('storage/'.$data->cl_center_signature) }}" alt="Signature" class="preview-img">
                                @endif
                            </div>
                        </div>
                        {{-- Director Aadhaar --}}
                        <div class="col-lg-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Director Aadhaar</label>
                                <input class="form-control" type="file" name="director_adhar">
                                @if(!empty($data->cl_director_adhar))
                                    <img src="{{ asset('storage/'.$data->cl_director_adhar) }}" alt="Aadhaar" class="preview-img">
                                @endif
                            </div>
                        </div>
                        {{-- Director PAN --}}
                        <div class="col-lg-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Director PAN</label>
                                <input class="form-control" type="file" name="director_pan">
                                @if(!empty($data->cl_director_pan))
                                    <img src="{{ asset('storage/'.$data->cl_director_pan) }}" alt="PAN" class="preview-img">
                                @endif
                            </div>
                        </div>
                        {{-- Director Education --}}
                        <div class="col-lg-4 mb-3">
                            <div class="form-group mb-3">
                                <label>Director Education</label>
                                <input required class="form-control" placeholder="Director Education"
                                    type="text" name="director_education"
                                    value="{{ old('director_education', $data->cl_director_education ?? '') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
        </form>
    </div>
</div>
@endsection
@push('custom-js')
@endpush
