    <!-- BASIC MODAL -->
    <div id="editprojectModal" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Project</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
          <form id="project" action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="titleEdit" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date" id="dateEdit" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Slug (Use hyphen (-) to seperate words. e.g this-is-a-slug)</label>
                                <input type="text" name="slug" id="slugEdit" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea cols="30" rows="5" name="body" id="contentEdit" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>


          <div class="modal-footer">
            <button type="submit" class="btn btn-primary pd-x-20">Update</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
        </div>
      </div><!-- modal-dialog -->

    </div><!-- modal -->
