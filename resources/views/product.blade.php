<div style="display: flex; justify-content: center;">
    <div class="container">
        <h1>{{ $product->product_name }}</h1>
        <p>{{ $product->product_description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <div style="display: flex; justify-content: center;">
            <img src="{{ asset('pictures/' . $product->product_name . '.jpeg') }}" alt="{{ $product->product_name }}" width="300">
        </div>
    </div>
</div>

<style>
p{
font-size: 20
}
</style>