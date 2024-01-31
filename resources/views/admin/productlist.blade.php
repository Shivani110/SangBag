@extends('admin_layout.master')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Products</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col tb-col-sm"><span>Product</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span>Category</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span>Style</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span>Price</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                Action
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @foreach($product as $data)
                                    <div class="nk-tb-item" id="product{{ $data->id }}">
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-product">
                                                <img src="{{ asset('/images/'.$data->product_image) }}" alt="" class="thumb">
                                                <span class="title">{{ $data->product_name }}</span>
                                            </span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">
                                                <?php
                                                    if($data->category ?? ''){
                                                        $cid = $data->category;
                                                        $category = (App\Models\ProductCategory::where('id','=',$cid)->first());
                                                        print_r($category->category_name);
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">
                                                <?php
                                                    if($data->style ?? ''){
                                                        $sid = $data->style;
                                                        $style = (App\Models\Style::where('id','=',$sid)->first());
                                                        print_r($style->name);
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">${{ number_format($data->price,2) }}</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{ url('product/'.$data->product_slug) }}"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                                <li><a onclick="removeProduct({{ $data->id }})"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @endforeach
                                </div><!-- .nk-tb-list -->
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
          
<script>
    function removeProduct(id){
        var data={
            id: id,
            _token: "{{ csrf_token() }}"
        }
        $.ajax({
            url: "{{ url('deleteproduct') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            success: function(response){
               if(response){
                    NioApp.Toast('Deleted..','error',{position:'top-right'});
                    id = data.id;
                    $('#product'+id).html('');
                }
            }
        });
    }
</script>

@endsection