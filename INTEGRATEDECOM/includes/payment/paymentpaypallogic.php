<script src="https://www.paypal.com/sdk/js?client-id=AQ1lW7MfDEMxVsr7q-ndva1IFSbglwz8FiZD5cFHKpDRhtJjhiBQiX2_KxvFTx9WaIS9O9ym1p6FWNwd&currency=USD"></script>
<!--I removed the merchant id from the link, it was immediately after the client-id ->     //merchant-id=<MERCHANT_ID> -->

<!-- To migrate from sandbox to live, simply replace the client-id with the live one and switch my project app on paypal sandbox to live. -->




<script>
  paypal.Buttons({
    // Order is created on the server and the order id is returned

    createOrder: function(data, actions) {

      return actions.order.create({
        purchase_units: [

          {

            amount: {

              // currency_code: "USD",

              value: "<?php echo $ammount; ?>",

            }

          }
        ],

      })

      // .then((response) => response.json())

      // .then((order) => order.id);

    },

    // Finalize the transaction on the server after payer approval

    onApprove: function(data, actions) {

      return actions.order.capture().then(function(orderData) {

        // Successful capture! For dev/demo purposes:)



        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

        const transaction = orderData.purchase_units[0].payments.captures[0];

        alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

        window.location.href = "server/complete_payment.php?transaction_id=" + transaction.id + "&order_id=" + <?php echo $order_id; ?>;

        // When ready to go live, remove the alert and show a success message within this page. For example:

        // const element = document.getElementById('paypal-button-container');

        // element.innerHTML = '<h3>Thank you for your payment!</h3>';

        // Or go to another URL:  actions.redirect('thank_you.html');

      });

    }

  }).render('#paypal-button-container');
</script>