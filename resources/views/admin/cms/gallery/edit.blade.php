@extends('admin.layouts.base')
@section('title', 'Edit Gallery')
@push('custom-css')
<style type="text/css">
		
</style>
@endpush
@section('content')
<div class="row mt-3">
	<div class="col-lg-6">
		<form id='update_frm' method="post" enctype="multipart/form-data">
			@csrf
			<div class="card">
				<div class="card-header bg-secondary text-white font-weight-bold">
					Edit Gallery
				</div>
				<div class="card-body"> 
					<div class='row'>
						<div class="col-md-12">
		
							<div class="form-group mb-3">
                                <label>Upload File</label><br>
                                <input class="form-control" type="file" name="file" accept=".pdf,.doc,.docx,.jpg,.png,.jpeg">

                                {{-- Show existing file if available --}}
                                @if($gallery->file)
                                    <div class="mt-2">
                                        <label class="text-muted">Current File:</label><br>
                                        <img src="{{ asset('storage/'.$gallery->file) }}" alt="Gallery Image" class="preview-img">
                                    </div>
                                @endif
                            </div>  

						</div>
					</div>
				</div>

				{{-- Buttons moved to footer --}}
				<div class="card-footer bg-light text-right">
					<a href="{{ route('student_list') }}" class="btn btn-dark btn-sm">View All</a>
					<button type="submit" class="btn btn-success btn-sm" id="update_btn" accesskey="s">Update</button>
				</div>

			</div>
		</form>
	</div>
</div>
@endsection
@push('custom-js')

@endpush
