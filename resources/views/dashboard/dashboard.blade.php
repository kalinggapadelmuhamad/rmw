@extends('layouts.app')

@section('content')
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content mt-5">
          <div class="modal-header">
            <h5 class="modal-title">You are using the trial version</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body justify-content-center text-center">
              You free trial period will expire in 1 days
          </div>
          <div class="modal-footer">  
            <a type="button" href="" class="btn btn-primary col-6 mx-auto font-weight-bold" data-dismiss="modal">
                Get Full Version
            </a>
          </div>
      </div>
    </div>
</div>
@endsection

@section('modal-js')
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').appendTo("body").modal('show');
    });
</script>
@endsection
