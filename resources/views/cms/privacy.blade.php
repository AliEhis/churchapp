@extends('layouts.admin')
 @section('title')
 Privacy & Policy
 @endsection
 @section('content')


 <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">PRIVACY & POLICY
            </h3>
        <form id="aboutForm" action="{{ route('cms.update', ['page' => 'privacypolicy', 'id' => 1]) }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
        <textarea id="summernote" name="privacy_policy">{!! $general->privacy_policy !!}</textarea>
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
