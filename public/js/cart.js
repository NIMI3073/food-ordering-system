function makePayment(amount, userData, groupId) {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-e99ece018a3d8f3e07811677d48bc508-X",
      tx_ref: transferId(groupId),
      amount: amount,
      currency: "NGN",
      payment_options: "card, banktransfer, ussd",
      redirect_url: "http://127.0.0.1:8000/payment/process",
    //   meta: {
    //     consumer_id: 23,
    //     consumer_mac: "92a3-912ba-1192a",
    //   },
      customer: userData,
      customizations: {
        title: "Food.ie payment",
        description: "Payment for an awesome cruise",
        // logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
      },
    });
  }

  

  function transferId(groupId, length = 10) {
    var result           = groupId+"_";
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}


