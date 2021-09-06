<a href="{{route('details.frontend', $product->id)}}" class="product-link h-100 mt-2">
    <div class="card h-100">
        <img class="card-img-top single-image" src="{{ asset('storage/images/'.$product->image_url)}}" alt="Card image cap">
        <div class="card-body">
            <h5>{{$product->name}}</h5>
            <p class="">Kshs {{$product->cost}}</p>

            <a href="{{route('details.frontend', $product->id)}}" class="btn btn-outline-teal">View Details</a>
            <a href="{{route('details.frontend', $product->id)}}" class="btn btn-teal">Buy Now</a>
        </div>
    </div>
</a>
