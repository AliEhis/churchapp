<div id="createAdminModal" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create new admin account</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
          </div>
            <div class="modal-body pd-20">
          <form id="myForm" action="{{route('cms.users.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for=""> Name <span class="tx-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">E-mail <span class="tx-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Password <span class="tx-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Confirm Password <span class="tx-danger">*</span></label>
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label for="role" class="control-label">Role <span class="tx-danger">*</span></label>
                            <select name="role_id" id="role_id" class="form-control">
                                @forelse ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->title}}</option>
                                @empty
                                    <option value="0">No roles defined yet.</option>
                                @endforelse
                            </select>
                        </div>
                    </div>               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pd-x-20">Create account</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          
                </div>
          </form>
        </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->