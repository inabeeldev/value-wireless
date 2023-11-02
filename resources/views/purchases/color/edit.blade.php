@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="main-content">
                        <div class="page-content">
                            <div class="container-fluid">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-4 col-12 bg-white p-4">
                                        <h3 class="text-center">Edit Color</h3>
                                        <form class="form-group batch-form" id="colorForm3" name="colorForm3" action=""  method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" id="editId6" value="{{ $color->id }}">
                                            <div class="form-group">
                                                <label for="">Color Name</label>
                                                <input class="form-control" name="name" value="{{ $color->name }}" type="text" id="name">
                                                <p></p>

                                            </div>

                                            <div class="form-group ">
                                                <label for="">Comment</label>
                                                <input class="form-control " name="comment" value="{{ $color->comment }}" type="text" id="comment" >
                                                <p></p>

                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-info text-white"  type="submit">Update </button>
                                            </div>
                                    </form>
                                </div> <!-- end row -->
                            </div> <!-- container-fluid -->
                        </div>
                        <!-- End Page-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJS')
    <script>
        $("#colorForm3").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            var id= $("#editId6").val();
            var url = '{{ route("color.update", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'POST',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response){

                    if (response['status'] == true) {

                        window.location.href = "{{ route('color.index') }}"

                        $('#name').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');

                    }
                    else {
                        var errors = response['errors'];
                        if (errors['name']) {
                            $('#name').addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['name']);
                        }
                        else {
                            $('#name').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        }
                    }

                }, error: function(jqXHR, exception){
                    console.log('went wrong');
                }

            })
        });
    </script>
@endsection
