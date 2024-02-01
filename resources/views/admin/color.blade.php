@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Product Color</h4>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <form id="myform" method="POST">
                                        <div class="row gy-4">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Color Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="name" name="name" value="">
                                                    </div>
                                                </div>
                                                <input type="hidden" id="clr_id" name="clr_id" value=""> 
                                                <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                                <br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <table class="table table-tranx" id="table">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Color Name</span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-action">
                                            <span>Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php $i=1; ?>
                                    @if($color ?? '')
                                        @foreach($color as $data)
                                            <tr class="tb-tnx-item" id="color{{ $data->id }}">
                                                <td class="tb-tnx-id">
                                                    <a href="#"><span>{{ $i++ }}</span></a>
                                                </td>
                                                <td class="tb-tnx-info clrname{{ $data->id }}">
                                                    <div class="tb-tnx-desc">
                                                        <input type="text" data-id="{{ $data->id }}" id="clname" class="" value="{{ $data->color_name }}" disabled="" style="border: none; background: transparent;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown drop"><a class="text-soft=" dropdown-toggle="" btn="" btn-icon="" btn-trigger="" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a data-id="{{ $data->id }}" data-name="{{ $data->color_name }}" class="edit-category">Edit</a></li>
                                                                <li><a data-id="{{ $data->id }}" class="remove-category">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif    
                                </tbody> 
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
       var i = parseInt({{ $i }});
        $('#myform').submit(function(e){
            e.preventDefault();
            var data={
                id: $('#clr_id').val(),
                name: $('#name').val(),
                _token:"{{ csrf_token() }}",
            }
            $.ajax({
                url: "{{ url('createcolor') }}",
                type: "POST",
                data: data,
                dataType: "JSON",
                success: function(response){
                    $('#myform')[0].reset();

                    if(response[1] == 'edit'){
                        var html = '<input type="text" data-id="'+response[0].id+'" id="clname" class="" value="'+response[0].color_name+'" disabled="" style="border: none; background: transparent;">';
                        $('.clrname'+response[0].id).html(html);
                        var targetDiv = $("#color"+response[0].id);
                        $('html, body').animate({
                            scrollTop: targetDiv.offset().top
                        }, 0);

                        $('#clr_id').val('');
                        $('#name').val('');
                    }

                    if(response[1] == 'save'){
                        var row = $('<tr class="tb-tnx-item" id="color'+response[0].id+'"><td class="tb-tnx-id"><a href="#"><span>'+ i +'</span></a></td><td class="tb-tnx-info clrname'+response[0].id+'"><div class="tb-tnx-desc"><input type="text" data-id="'+response[0].id+'" id="clname" class="" value="'+response[0].color_name+'" disabled="" style="border: none; background: transparent;"></div></td><td><div class="dropdown drop"><a class="text-soft=" dropdown-toggle="" btn="" btn-icon="" btn-trigger="" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em><div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain"><li><a data-id="'+response[0].id+'" data-name="'+response[0].color_name+'" class="edit-category">Edit</a></li><li><a data-id="'+response[0].id+'" class="remove-category">Remove</a></li></ul></div></div></td></tr>');
                        $('tbody').append(row);
                        i = i+1;

                        var targetDiv = $("#color"+response[0].id);
                        $('html, body').animate({
                            scrollTop: targetDiv.offset().top
                        }, 0);
                    }
                },
                error: function(errors){
                    var message = errors.responseJSON.message;
                    NioApp.Toast(message, 'error' ,{position:'top-right'});
                }
            });
        });
    });

    $('.edit-category').click(function(){
        window.scrollTo(0, 0);
        var name = $(this).attr('data-name');
        var id = $(this).attr('data-id');

        var cname = $('#name').val(name);
        var cid = $('#clr_id').val(id);
    });

    $('.remove-category').click(function(){
        $('#name').val('');
        $('#clr_id').val('');

        var id = $(this).attr('data-id');
        var data={
            id: id,
            _token: "{{ csrf_token() }}",
        }
        $.ajax({
            url:"{{ url('deletecolor') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            success: function(response){
                if(response){
                    NioApp.Toast('Deleted..','error',{position:'top-right'});
                    id = data.id;
                    $('#color'+id).html('');
                }
            }
        });
    });

</script>

@endsection