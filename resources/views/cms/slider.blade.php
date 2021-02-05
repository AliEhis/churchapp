@extends('layouts.admin')
@section('title')
Slider Settings
@endsection
@section('content')

<section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Slider Images
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
        <div class="row">
            <div class="col-md-6">
                <p>
                    <strong>Slider 1 Image: </strong>
                    @if ($general->slider1 != NULL || $general->slider1 != '')
                        <img class="card-img-bottom img-fluid" src="{{ asset($general->slider1) }}" alt="" style="margin-left: 20px; width: 30%">
                        <a href="{{ route('admin.slider.delete', ['slider' => 'slider1']) }}">
                        <i class="icon ion-ios-trash-outline tx-24"></i>
                        </a>
                    @else
                        <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider1'])}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="file" name="slider1" class="form-control" style="padding: .4rem .8rem;" required>
                                    <span class="input-group-addon"><button type="submit" class="btn btn-primary">Upload</button></span>
                                </div>
                            </div>
                        </form>
                    @endif
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider1'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="header1" class="form-control" placeholder="Header Title" value="{{ $general->header1 }}" style="padding: .4rem .8rem;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="sub_header1" class="form-control" placeholder="Sub header" value="{{ $general->sub_header1 }}" style="padding: .4rem .8rem;" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <strong>Slider 2 Image: </strong>
                    @if ($general->slider2 != NULL || $general->slider2 != '')
                        <img src="{{ asset($general->slider2) }}" alt="" style="margin-left: 20px; width: 30%">
                        <a href="{{ route('admin.slider.delete', ['slider' => 'slider2']) }}">
                        <i class="icon ion-ios-trash-outline tx-24"></i>
                        </a>
                    @else
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider2'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="file" name="slider2" class="form-control" style="padding: .4rem .8rem;" required>
                                <span class="input-group-addon"><button type="submit" class="btn btn-primary">Upload</button></span>
                            </div>
                        </div>
                    </form>
                    @endif
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider2'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="header2" class="form-control" placeholder="Header Title" value="{{ $general->header2 }}" style="padding: .4rem .8rem;" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="sub_header2" class="form-control" placeholder="Sub header" value="{{ $general->sub_header2 }}" style="padding: .4rem .8rem;" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <strong>Slider 3 Image: </strong>
                    @if ($general->slider3 != NULL || $general->slider3 != '')
                        <img src="{{ asset($general->slider3) }}" alt="" style="margin-left: 20px; width: 30%">
                        <a href="{{ route('admin.slider.delete', ['slider' => 'slider3']) }}">
                        <i class="icon ion-ios-trash-outline tx-24"></i>
                        </a>
                    @else
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider3'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="file" name="slider3" class="form-control" style="padding: .4rem .8rem;" required>
                                <span class="input-group-addon"><button type="submit" class="btn btn-primary">Upload</button></span>
                            </div>
                        </div>
                    </form>
                    @endif
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider3'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="header3" class="form-control" placeholder="Header Title" value="{{ $general->header3 }}" style="padding: .4rem .8rem;" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="sub_header3" class="form-control" placeholder="Sub header" value="{{ $general->sub_header3 }}" style="padding: .4rem .8rem;" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <strong>Slider 4 Image: </strong>
                    @if ($general->slider4 != NULL || $general->slider4 != '')
                        <img src="{{ asset($general->slider4) }}" alt="" style="margin-left: 20px; width: 30%">
                        <a href="{{ route('admin.slider.delete', ['slider' => 'slider4']) }}">
                        <i class="icon ion-ios-trash-outline tx-24"></i>
                        </a>
                    @else
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider4'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="file" name="slider4" class="form-control" style="padding: .4rem .8rem;" required>
                                <span class="input-group-addon"><button type="submit" class="btn btn-primary">Upload</button></span>
                            </div>
                        </div>
                    </form>
                    @endif
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider4'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="header4" class="form-control" placeholder="Header Title" value="{{ $general->header4 }}" style="padding: .4rem .8rem;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="sub_header4" class="form-control" placeholder="Sub header" value="{{ $general->sub_header4 }}" style="padding: .4rem .8rem;" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <strong>Slider 5 Image: </strong>
                    @if ($general->slider5 != NULL || $general->slider5 != '')
                        <img src="{{ asset($general->slider5) }}" alt="" style="margin-left: 20px; width: 30%">
                        <a href="{{ route('admin.slider.delete', ['slider' => 'slider5']) }}">
                        <i class="icon ion-ios-trash-outline tx-24"></i>
                        </a>
                    @else
                        <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider5'])}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="file" name="slider5" class="form-control" style="padding: .4rem .8rem;" required>
                                    <span class="input-group-addon"><button type="submit" class="btn btn-primary">Upload</button></span>
                                </div>
                            </div>
                        </form>
                    @endif
                    <form id="myForm" action="{{ route('admin.slider.update', ['slider' => 'slider5'])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="header5" class="form-control" placeholder="Header Title" value="{{ $general->header5 }}" style="padding: .4rem .8rem;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="sub_header5" class="form-control" placeholder="Sub header" value="{{ $general->sub_header5 }}" style="padding: .4rem .8rem;" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </p>
            </div>
            <div class="col-md-6">
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
