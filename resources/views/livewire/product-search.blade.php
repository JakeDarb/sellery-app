<div>
    <label for="search">Search</label>
    <input wire:keyup="search" wire:model="search" type="text" name="search" id="search">

    @if($search)
    <h2>Searching for: <em>{{ $search }}</em></h2>
    @endif
    
    @foreach($products as $product)
    <div>
        <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
    </div>
    @endforeach
</div>
