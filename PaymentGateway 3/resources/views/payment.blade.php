{{-- <html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-DaiQzEaMI_xi-hcN"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
            .pay-button{
                padding: 10px;
                border-radius: 5px;
                background-color: navy;
                color: white;
            }
        </style>
</head>

<body>
    <button id="pay-button" class="pay-button">Bayar</button>

    <form action="{{ url('payment') }}" id="submit_form" method="POST">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>

    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {

                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
    </script>
</body>

</html> --}}
