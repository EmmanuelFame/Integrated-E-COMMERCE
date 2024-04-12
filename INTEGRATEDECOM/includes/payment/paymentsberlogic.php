<?php
    $client->createPayment(
        array(
            'amount' => array(
                'value' => 50,
                'currency' => 'RUB',
            ),
            'payment_method_data' => array(
                'type' => 'b2b_sberbank',
                'payment_purpose' => 'Payment for order No. 37',
                'vat_data' => array(
                    'type' => 'calculated',
                    'rate' => 18,
                    'amount' => array(
                        'value' => "<?php echo $ammount; ?>",
                        'currency' => 'RUB',
                    ),
                ),
            ),
            'confirmation' => array(
                'type' => 'redirect',
                'return_url' => 'https://www.example.com/return_url',
            ),
            'capture' => true,
            'description' => 'Payment for order No. 37',
        ),
        uniqid('', true)
    );
?>
