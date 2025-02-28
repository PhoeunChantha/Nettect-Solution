 <div class="owl-carousel owl-carousel-accessory owl-theme" data-product-count="{{ $accessoriesProducts->count() }}">
     @foreach ($accessoriesProducts as $item)
         <div class="item">
            <div class="card home-desktop border-0 shadow-lg product-card" data-product-id="{{ $item->id }}">
                 <div class="card-header head-img justify-content-center">
                     {{-- Discount Badge --}}
                      @if (
                         $item->discount &&
                             $item->discount->start_date &&
                             $item->discount->end_date &&
                             now()->toDateString() >= \Carbon\Carbon::parse($item->discount->start_date)->toDateString() &&
                             now()->toDateString() <= \Carbon\Carbon::parse($item->discount->end_date)->toDateString())
                         <span class="discount-amount text-white bg-danger">
                             {{ $item->discount->discount_value }}% OFF
                         </span>
                     @endif

                     {{-- Product Image --}}
                     <img src="{{ asset('uploads/products/' . ($item->thumbnail[0] ?? 'default.png')) }}"
                         alt="{{ $item->name }}">
                 </div>
                 <div class="card-body desktop-body">
                     <h5 class="card-title fw-bold" style="color: #1077B8;">
                         <a href="{{ route('product-detail', $item->id) }}">
                             {{ $item->name }}
                         </a>
                     </h5>

                     @php
                         $discountValue = $item->discount ? $item->discount->discount_value : 0;

                         $discountedPrice = $item->price;

                         if ($discountValue > 0) {
                             $discountedPrice = $item->price - $item->price * ($discountValue / 100); // Apply discount
                         }
                     @endphp

                     <p class="card-text fw-bold" style="margin-bottom: 0; color: #008E06">
                         @if ($discountedPrice < $item->price)
                             ${{ number_format($discountedPrice, 2) }}
                             <span class="text-decoration-line-through text-secondary text-opacity-50">
                                 ${{ number_format($item->price, 2) }}
                             </span>
                         @else
                             ${{ number_format($item->price, 2) }}
                         @endif
                     </p>
                     @if ($item->quantity <= 0)
                         <span class="stock badge bg-danger">{{ __('Out of stock') }}</span>
                     @else
                         <span class="stock badge bg-success">{{ __('In stock') }}</span>
                     @endif
                 </div>
             </div>
         </div>
     @endforeach
 </div>

