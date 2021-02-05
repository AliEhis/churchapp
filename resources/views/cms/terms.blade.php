@extends('layouts.admin')
 @section('title')
 Terms of Use
 @endsection
 @section('content')


 <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Temrs of Use
            </h3>
        <form id="aboutForm" action="{{ route('cms.update', ['page' => 'termsofuse', 'id' => 1]) }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
        <textarea id="summernote" name="terms_of_use">{!! $general->terms_of_use !!}</textarea>
        <div class="form-layout-footer">
            <button type="submit" class="btn btn-primary mg-r-5">Update</button>
        </div>
        </form>
      </div><!-- card -->
    </div><!-- sl-pagebody -->
      </div>
    </div>
 </section>



 @endsection
