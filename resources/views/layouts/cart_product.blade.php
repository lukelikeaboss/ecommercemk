<a href="{{route('details.frontend', $product->product->id)}}" class="product-link h-100 mt-2">
    <div class="card h-100">
        <img class="card-img-top single-image" src="{{ asset('storage/images/'.$product->product->image_url)}}" alt="Card image cap">
        <div class="card-body">
            <h5>{{$product->product->name}}</h5>
            <p class="">Kshs {{$product->product->cost}}</p>

        </div>
    </div>
</a>
