    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Event</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-25">
            <form  action="{{ route('cms.store', ['page' => 'events'])}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Event Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Topic</label>
                            <input type="text" name="topic" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""> Event Tag Line</label>
                            <input type="text" name="tag" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Bible Text</label>
                            <input type="text" name="bible" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Speaker Name</label>
                            <input type="text" name="speaker_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Speaker Bio</label>
                            <input type="text" name="speaker_bio" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Event Date</label>
                        <input type="date" name="event_date" class="form-control" required>
                    </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Event Time</label>
                            <input type="time" name="event_time" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Venue</label>
                        <input type="text" name="venue" class="form-control" >
                    </div>
                    </div>
					
					   <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Service Type</label>
                        <input type="text" name="service_type" class="form-control" >
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form-label"> Banner Image</label>
                            <input type="file" name="image">
                        </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form-label"> Speaker Image</label>
                            <input type="file" name="speaker_image">
                        </div>
                        </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" class="form-control" id="summernote" required></textarea>
                        </div>
                    </div>
                </div>


            <div class="modal-footer">
              <button type="submit" class="btn btn-primary pd-x-20">Save</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
            </form>
          </div>
          </div>
        </div><!-- modal-dialog -->

      </div><!-- modal -->
