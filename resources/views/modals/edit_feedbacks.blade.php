    <!-- BASIC MODAL -->
    <div id="editpendingfeedbacksModal" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Confirm Approval</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-25">
            <form id="pendingfeedbacks" action="" method="post">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="PUT">
                      <div class="row">
                      <div class="col-md-12">
                              <div class="form-group">
                                  <label for="">name</label>
                                  <input type="text" name="name" id="nameEdit" class="form-control" disabled>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" id="titleEdit" class="form-control" disabled>
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea type="text" name="body" id="bodyEdit" class="form-control" rows="10" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Action</label>
                                <select name="status" id="" required>
                                    <option value="1">Approve</option>
                                    <option value="0">Decline</option>
                                </select>
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
