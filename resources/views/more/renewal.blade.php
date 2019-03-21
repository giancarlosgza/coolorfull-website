@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-form">
                    <div class="card-body">
                        <h5 class="bold">Pro Subscription</h5>
                        <hr>
                        <h5>❤️ Save your <strong>favorites gradients</strong></h5>
                        <h5>💚 Save your <strong>favorites palettes</strong></h5>
                        <h5>👓 Access to <strong>color blindness</strong> filter</h5>
                        <h5>🙆‍♂️ <strong>Save gradients</strong> created with generators</h5>
                        <h5>🎨 <strong>Preview icons</strong> with color palettes</h5>
                        <h5>🎁 <strong>Access</strong> to icons, backgrounds and illustrations (coming soon)</h5>
                        <h5>📧 Do you want some <strong>feature? <a href="mailto:colorffy@gmail.com" class="color-darkblue" title="Contact Us">request here!</a></strong></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card card-form">
                    <div class="card-body">
                        <h4 class="logo text-center color-blue">Colorffy</h4>
                        <h5 class="text-center">Renew Subscription</h5>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <p class="bold">Register and pay monthly: $2.99 USD</p>
                                <div id="monthly-paypal-button-container"></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <p class="bold">Register and once in a lifetime: $35 USD</p>
                                <div id="lifetime-paypal-button-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>

        paypal.Buttons({
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ env('MONTHLY_PRICE') }}'
                        }
                    }]
                })
            },
            onApprove: (data, actions) => {
                return actions.order.capture()
                    .then(details => renewalRequest(data))
                    .catch(details => {
                        swal("Payment connection failed", `{{ __('There was an error connecting to the payments platform. We are investigating, please, reload the page or try again later.') }}`,
                            "warning")
                        console.log(details)
                    })
            }
        }).render('#monthly-paypal-button-container');

        paypal.Buttons({
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ env('LIFETIME_PRICE') }}'
                        }
                    }]
                })
            },
            onApprove: (data, actions) => {
                return actions.order.capture()
                    .then(details => renewalRequest(data))
                    .catch(details => {
                        swal("Payment connection failed", `{{ __('There was an error connecting to the payments platform. We are investigating, please, reload the page or try again later.') }}`,
                            "warning")
                        console.log(details)
                    })
            }
        }).render('#lifetime-paypal-button-container');

        function renewalRequest(data) {
            $.ajax({
                type: 'POST',
                url: '{{ route('renewSub')  }}',
                data: {
                    orderId: data.orderID
                }
            }).done((response, status) => {
                if (response.success &&
                    status === 'success' &&
                    response.message === 'COMPLETED') {
                    window.location = "{{ route('home') }}"
                } else if (!response.success && response.status === 'INCORRECT_FORM') {
                    swal("Registration failed", `{{ __('We have registered the error and if payment went through, we will contact you as soon as possible to give you your account manually.') }}`,
                        "error");
                    console.log(response.data)
                } else {
                    swal('Error connecting to the server', '{{ __('Error while processing payment') }}', 'error')
                }
            })
        }
    </script>
@endsection