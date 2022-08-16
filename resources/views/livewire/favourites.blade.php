<div class="favourites">
    @if(!empty($favourite))
        <a href="#" class="btn--favourite" wire:click.prevent="delete('{{ $product_id }}')">Remove from favourites</a>
    @else
        <a href="#" class="btn--favourite" wire:click.prevent="add('{{ $product_id }}')">Favourite</a>
    @endif
</div>