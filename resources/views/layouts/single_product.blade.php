<a href="{{route('details.frontend', $product->id)}}">
    <div class="card h-100">
        <img class="card-img-top" src="{{ asset('storage/images/'.$product->image_url)}}" alt="Card image cap">
        <div class="card-body">
            <h5>{{$product->name}}</h5>
            <p class="card-text">Kshs {{$product->cost}}</p>

            <a href="{{route('details.frontend', $product->id)}}" class="btn btn-primary">View Details</a>
            <a href="{{route('details.frontend', $product->id)}}" class="btn btn-primary">Buy Now</a>
        </div>
    </div>
</a>
