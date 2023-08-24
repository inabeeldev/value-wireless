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
                                        <h3 class="text-center">Add a Warehouse</h3>
                                        <form class="form-group batch-form" id="warehouseForm3" name="warehouseForm3" action=""  method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" id="editId" value="{{ $warehouse->id }}">
                                            <div class="form-group">
                                                <label for="">Warehouse Name</label>
                                                <input class="form-control" name="name" value="{{ $warehouse->name }}" type="text" id="name">
                                                <p></p>

                                            </div>

                                            <div class="form-group ">
                                                <label for="">Location</label>
                                                <input class="form-control " name="location" value="{{ $warehouse->location }}" type="text" id="location" >
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
        $("#warehouseForm3").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            var id= $("#editId").val();
            var url = '{{ route("warehouse.update", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'POST',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response){

                    if (response['status'] == true) {

                        window.location.href = "{{ route('warehouse.index') }}"

                        $('#name').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        $('#location').removeClass('is-invalid')
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

                        if (errors['location']) {
                            $('#location').addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['location']);
                        }
                        else {
                            $('#location').removeClass('is-invalid')
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
