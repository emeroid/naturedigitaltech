@php $cartCollection = \Cart::getContent() @endphp
<a id="nav-link-pages" class="u-icon-v1 g-color-main g-text-underline--none--hover g-width-20 g-height-20" href="/products/checkout" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">
  <span class="u-badge-v1--sm g-color-white g-bg-orange g-rounded-50x">
    
        {{count($cartCollection)}}
  
  </span>
    <i class="fa fa-shopping-cart"></i>
</a>