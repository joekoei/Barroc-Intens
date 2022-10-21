<div>
    <div class="container mt-3">
        <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </div>
    <div class="container d-flex justify-content-center">
        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-sm-3">
                    <div class="card mb-2" style="@if($product->cat()->id == 2) height: 325px; @else height: 425px; @endif width: 303px; ">
                        <img src="{{asset($product->image_paths)}}" class="card-img-top">
                        <div class="card-body pt-0 px-0">
                            <div class="d-flex flex-row justify-content-between mb-0 px-3">
                                <h6>{{$product->name}}</h6>
                            </div>
                            <hr class="mt-2 mx-3">
                            <div class="mx-3 mt-3 mb-2"><a href="{{route('offers',$product->id)}}" class="btn btn-warning btn-block"><small>Offerte?</small></a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
