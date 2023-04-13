@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/thankyou.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <div class="card-header">{{ __('Thank you for your order!') }}</div>
                <div class="flex-parent jc-center" >

                <button class="orderButton" onclick="redirectToOrderPage()">View Your Order</button>
</div>

            </div>
        </div>
    </div>
</div>
@endsection

<script>
		function redirectToOrderPage() {
			return redirect()->route('order');
		}
	</script>