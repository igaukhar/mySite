<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="{{ Storage::url($product->image) }}">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} TG</p>
            <p>
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">Basket</button>
            <a href="{{ route('products.show', $product) }}" class="btn btn-default"
               role="button">More
            </a>
                @csrf
            </form>
        </div>
    </div>
</div>
