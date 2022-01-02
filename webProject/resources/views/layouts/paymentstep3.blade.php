
    <h2 class="s3-h2 text-start check-3">Your order is confirmed. <br> Check your email for confirmatory email.</h2>
    <h3 class='s3-h3 text-start check-3'>For any queries/help, contact us on flores@gmail.com</h3>
    <div class="text-center check-3">
        <a 
        @if($event)
        href="{{route('accountHistory')}}"
        @elseif($orders)
        href="{{route('giftCartCheckout')}}"
        @endif
        class="s3-a rounded-pill px-4 py-2">Done</a>
    </div>
