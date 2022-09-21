@extends('layouts.company')

@section('content')
<section class="section">
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mt-5">
            <div class="modal-header">
            <h5 class="justify-content-center text-center" id="exampleModalLabel">
                You are using trial version
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary col-6 mx-auto font-weight-bold" data-dismiss="modal">
                Get Full Version
            </button>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

@section('modal-js')
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').appendTo("body").modal('show');
    });
</script>
@endsection
