
  paypal.Button.render({

    // Configure environment

    env: 'sandbox',

    client: {

      sandbox: 'AS-9iPpq3PoOszso7eOshfI-cDa0bRWhZ2AuRf37E1XMxVS72vMuomLZFXz7VZsdzFEL3WBdFK4vEfDE',

      production: 'AS-9iPpq3PoOszso7eOshfI-cDa0bRWhZ2AuRf37E1XMxVS72vMuomLZFXz7VZsdzFEL3WBdFK4vEfDE'

    },

    // Customize button (optional)

    locale: 'en_US',

    style: {

      size: 'medium',

      color: 'gold',

      shape: 'pill',

    },


    // Enable Pay Now checkout flow (optional)

    commit: true,


    // Set up a payment

    payment: function(data, actions) {

      return actions.payment.create({

        transactions: [{

          amount: {

            total: am,

            currency: 'USD'

          }

        }]

      });

    },


    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
          // Show a success message to the buyer
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
      });
  },



    // Execute the payment

    onAuthorize: function(data, actions) {

      return actions.payment.execute().then(function() {

        // Show a confirmation message to the buyer

        window.alert('Thank you for your purchase!');

      });

    }

  }, '#paypal-button');
