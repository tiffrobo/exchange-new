---
layout: page
title: Support the DSX
permalink: /support/
---
# Support the DSX

<strong>Please consider donating to the Digital Security Exchange</strong>. Your support helps the DSX continue to provide a unique service to advocacy organizations, media projects, civil rights advocates, and public figures who are working to advance social, racial, political, and economic justice in our communities and our world.

<table cellspacing="40">
<tr>
<th>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<div id="paypal-button-container"></div>

<script>

    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'production', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'paypal',
            size:  'large', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'blue',   // gold | blue | silver | black
            tagline: false
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: 'AfuwkyMCK-AO__Lnc_fQqAoO08CMcmiFi1VtEM8wRrJsCc0qYYCxkfXbrusoTRYNy7Y6t0MGGDHmbhsR'
        },

        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }

    }, '#paypal-button-container');

</script>

</th>
<th>
<a class="coinbase-button" data-code="2b30a03995ec62f15bdc54e8428caa87" href="https://www.coinbase.com/checkouts/2b30a03995ec62f15bdc54e8428caa87">Pay With Bitcoins</a>
<script src="https://www.coinbase.com/assets/button.js" type="text/javascript"></script>
</th>
</tr>
</table>

<strong>Note</strong>: Your donation is tax-deductible and will be processed by Internet Systems Consortium, our fiscal sponsor and a 501(c)(3) nonprofit.
