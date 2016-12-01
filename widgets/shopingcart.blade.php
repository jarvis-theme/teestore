@if(Shpcart::cart()->total_items() > 0)
({{ Shpcart::cart()->total_items() }})
@endif