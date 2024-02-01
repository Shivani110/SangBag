@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Products</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                @if(isset($product))
                <form method="post" action="{{ url('updateproduct') }}" enctype="multipart/form-data"> 
                    @csrf
                @else
                <form method="post" action="{{ url('createproduct') }}" enctype="multipart/form-data">  
                @endif
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="pname">Product Name</label>
                                <input type="text" name="pname" id="pname" class="form-control" value="{{ $product->product_name ?? ''}}">
                                @error('pname')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="pslug">Slug</label>
                                <input type="text" name="pslug" id="pslug" class="form-control" value="{{ $product->product_slug ?? ''}}">
                                @error('pslug')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="category">Category</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" id="category" name="category">
                                        <option value="">Select</option>
                                        @if($product->category ?? '')
                                            @foreach($category as $catg)
                                                @if($catg->id == $product->category)
                                                    <option selected value="{{ $catg->id }}">{{ $catg->category_name }}</option>
                                                @else
                                                    <option value="{{ $catg->id }}">{{ $catg->category_name }}</option>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($category as $catg)
                                                <option value="{{ $catg->id }}">{{ $catg->category_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                            
                                    @error('category')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="style">Style</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" id="style" name="style">
                                        <option value="">Select</option>
                                        @if($product->style ?? '')
                                            @foreach($style as $sty)
                                                @if($sty->id == $product->style)
                                                    <option selected value="{{ $sty->id }}">{{ $sty->name }}</option>
                                                @else
                                                    <option value="{{ $sty->id }}">{{ $sty->name }}</option>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($style as $sty)
                                                <option value="{{ $sty->id }}">{{ $sty->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                            
                                    @error('style')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="image">Product Image</label>
                                @if($product->product_image ?? '')
                                    <img src="{{ asset('/images/'.$product->product_image) }}" alt="">
                                @endif
                                <input type="file" name="image" id="image" class="form-control" value="">

                                @error('f_image')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="gimage">Gallery Image</label>
                                <input type="file" name="gimage[]" id="gimage" class="form-control" value="" multiple>

                                @error('gimage')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="brand">Brands</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" id="brand" name="brand">
                                        <option value="">Select</option>
                                        @if($product->brand ?? '')
                                            @foreach($brand as $brd)
                                                @if($brd->id == $product->brand)
                                                    <option selected value="{{ $brd->id }}">{{ $brd->brand_name }}</option>
                                                @else
                                                    <option value="{{ $brd->id }}">{{ $brd->brand_name }}</option>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($brand as $brd)
                                                <option value="{{ $brd->id }}">{{ $brd->brand_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                            
                                    @error('brand')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="color">Color</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" id="color" name="color">
                                        <option value="">Select</option>
                                        @if($product->color ?? '')
                                            @foreach($color as $clr)
                                                @if($clr->id == $product->color)
                                                    <option selected value="{{ $clr->id }}">{{ $clr->color_name }}</option>
                                                @else
                                                    <option value="{{ $clr->id }}">{{ $clr->color_name }}</option>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($color as $clr)
                                                <option value="{{ $clr->id }}">{{ $clr->color_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                            
                                    @error('color')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" value="{{ $product->price ?? ''}}">
                                @error('price')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" name="description" id="description">{{ $product->description ?? ''}}</textarea>
                                @error('description')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="p_id" id="p_id" value="{{ $product->id ?? '' }}">
                    <br>
                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#pname').keyup(function(){
        const pname = $('#pname').val();
        const url = pname.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        const slug = $('#pslug').val(url);
    });
</script>

@endsection