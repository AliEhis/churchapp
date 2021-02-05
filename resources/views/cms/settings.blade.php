@extends('layouts.admin')
@section('title')
Site Settings
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Website Settings
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                      title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-md-6 col-sm-12">
                            <form action="{{route('cms.site-settings.update')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Site Name</label>
                                    <input type="text" name="site_name" id="site_name" class="form-control{{ $errors->has('site_name') ? ' has-danger has-feedback' : '' }}"  autofocus value="{{$site ? $site->site_name : ''}}">
                                    @if ($errors->has('site_name'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('site_name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Hot-line</label>
                                    <input type="text" name="hotline" id="hotline" class="form-control{{ $errors->has('hotline') ? ' has-danger has-feedback' : '' }}"  value="{{$site ? $site->hotline : ''}}">
                                    @if ($errors->has('hotline'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('hotline') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Hot-line2</label>
                                    <input type="text" name="hotline2" id="hotline" class="form-control{{ $errors->has('hotline2') ? ' has-danger has-feedback' : '' }}"  value="{{$site ? $site->hotline2 : ''}}">
                                    @if ($errors->has('hotline2'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('hotline2') }}</span>
                                    @endif
                                </div>
                            </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Contact E-mail</label>
                                    <input type="text" name="site_email" id="site_email" class="form-control{{ $errors->has('site_email') ? ' has-danger has-feedback' : '' }}"  value="{{$site ? $site->site_email : ''}}">
                                    @if ($errors->has('site_email'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('site_email') }}</span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-12">
                                     <div class="form-group">
                                        <label for="site_name" class="control-label">Address</label>
                                        <input type="text" name="site_address" id="site_address" class="form-control{{ $errors->has('site_address') ? ' has-danger has-feedback' : '' }}"  value="{{$site ? $site->site_address : ''}}">
                                        @if ($errors->has('site_address'))
                                            <div class="form-control-feedback">
                                                <i class="text-danger icon-cancel-circle2"></i>
                                            </div>
                                            <span class="help-block text-danger">{{ $errors->first('site_address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Facebook Handle</label>
                                    <input type="url" name="facebook" id="facebook" class="form-control{{ $errors->has('facebook') ? ' has-danger has-feedback' : '' }}" value="{{$site ? $site->facebook : ''}}">
                                    @if ($errors->has('facebook'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('facebook') }}</span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Twitter Handle</label>
                                    <input type="url" name="twitter" id="twitter" class="form-control{{ $errors->has('twitter') ? ' has-danger has-feedback' : '' }}" value="{{$site ? $site->twitter : ''}}">
                                    @if ($errors->has('twitter'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('twitter') }}</span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Linkedin Handle</label>
                                    <input type="url" name="linkedin" id="linkedin" class="form-control{{ $errors->has('linkedin') ? ' has-danger has-feedback' : '' }}" value="{{$site ? $site->linkedin : ''}}">
                                    @if ($errors->has('linkedin'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('linkedin') }}</span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Instagram</label>
                                    <input type="url" name="instagram" id="instagram" class="form-control{{ $errors->has('instagram') ? ' has-danger has-feedback' : '' }}" value="{{$site ? $site->instagram : ''}}">
                                    @if ($errors->has('instagram'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('instagram') }}</span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control{{ $errors->has('logo') ? ' has-danger has-feedback' : '' }}">
                                    @if ($errors->has('logo'))
                                        <div class="form-control-feedback">
                                            <i class="text-danger icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block text-danger">{{ $errors->first('logo') }}</span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-sm">Update Settings</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h4>Default Site Settings</h4>
                            <ul>
                                <li>
                                    <b class="text-uppercase">Site Name: </b> {{$site ? $site->site_name : ''}}
                                    <br><br>
                                </li>
                                <li>
                                        <b class="text-uppercase">Hotline: </b> {{$site ? $site->hotline : ''}}
                                        <br><br>
                                    </li>
                                <li>
                                    <b class="text-uppercase">Hotline2: </b> {{$site ? $site->hotline2 : ''}}
                                    <br><br>
                                </li>

                                <li>
                                    <b class="text-uppercase">Site Email: </b> {{$site ? $site->site_email : ''}}
                                    <br><br>
                                </li>
                                 <li>
                                        <b class="text-uppercase">Site Address: </b> {{$site ? $site->site_address : ''}}
                                        <br><br>
                                    </li>
                                <li>
                                    <b class="text-uppercase">Facebook: </b> {{$site ? $site->facebook : ''}}
                                    <br><br>
                                </li>
                                <li>
                                    <b class="text-uppercase">Twitter: </b> {{$site ? $site->twitter : ''}}
                                    <br><br>
                                </li>
                                <li>
                                    <b class="text-uppercase">Linkedin: </b> {{$site ? $site->linkedin : ''}}
                                    <br><br>
                                </li>

                                <li>
                                    <b class="text-uppercase">Instagram: </b> {{$site ? $site->instagram : ''}}
                                    <br><br>
                                </li>

                                <li>
                                    <b>Logo (logo size:207 X 57)</b><br />
                                <p><img src="{{ asset($site->logo) }}" alt="" width="30%" style="float: left; margin-right: 20px;"></p>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->

</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
@endsection

@section('javascripts')

    <script>

        $(function() {
            'use strict';

            // Default file input style
            $(".file-styled-basic").uniform({
                fileButtonHtml: 'Browse'
            });

            // Default file input style with icon
            $(".file-styled-icon").uniform({
                fileButtonHtml: '<i class="icon-folder2"></i>'
            });

            // Primary file input
            $(".file-styled-primary").uniform({
                wrapperClass: 'bg-primary',
                fileButtonHtml: 'Browse'
            });

            // Primary file input
            $(".file-styled-primary-icon").uniform({
                wrapperClass: 'bg-primary',
                fileButtonHtml: '<i class="icon-folder2"></i>'
            });
        });


    </script>


@endsection
