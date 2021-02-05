    <!-- BASIC MODAL -->
    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">View Categories </h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-25">
                <table id="" class="table table-bordered table-hover display nowrap margin-top-10">
                    <thead>
                        <tr>
                          <th class="wd-10p">#</th>
                          <th class="wd-15p">Name</th>
                          <th class="wd-15p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(count($posts_category) < 1)
                      <tr>
                          <th>No Blog Category currently available</th>
                      </tr>
                      @else
                      @foreach($posts_category as $key=>$state)
                      <tr>
                          <td>{{++$key}}</td>
                          <td>{{$state->name}}</td>
                          <td>

                            <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteCategory({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>

                          </td>
                          </tr>
                        @endforeach
                        @endif
                      </tbody>

                </table>
          </div>
          </div>
        </div><!-- modal-dialog -->

      </div><!-- modal -->

      <script>


        function deleteCategory(id) {

            event.preventDefault();

            if (confirm("Are you sure?")) {

                $.ajax({
                    url: 'delete/categories/' + id,
                    method: 'get',
                    success: function(result){
                        window.location.assign(window.location.href);
                    }
                });

            } else {

                console.log('Delete process cancelled');

            }

        }

        </script>
