    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Post</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-25">
            <form id="pharmCreate" action="{{ route('cms.store', ['page' => 'posts'])}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" class="form-control" required  value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="checkbox" id="published" name="status" class="filled-in" value="1" />
                        <label for="published">Published</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form-label">Featured Image</label>
                            <input type="file" name="image">
                        </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('categories') ? 'focused error' : ''}}">
                            <label>Select Category</label>
                            <select name="categories[]" class="form-control show-tick" multiple data-live-search="true">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('tags') ? 'focused error' : ''}}">
                            <label>Select Tag</label>
                            <select name="tags[]" class="form-control show-tick" multiple data-live-search="true">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
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
