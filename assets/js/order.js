function triggerPaypal() {
    const url = 'https://www.sandbox.paypal.com/checkoutnow?sessionID=48a779d01c_mti6ntg6nta&buttonSessionID=61f62f9902_mti6ntg6nta&fundingSource=paypal&buyerCountry=KE&locale.x=en_GB&commit=true&clientID=AS-9iPpq3PoOszso7eOshfI-cDa0bRWhZ2AuRf37E1XMxVS72vMuomLZFXz7VZsdzFEL3WBdFK4vEfDE&env=sandbox&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVMtOWlQcHEzUG9Pc3pzbzdlT3NoZkktY0RhMGJSV2haMkF1UmYzN0UxWE14VlM3MnZNdW9tTFpGWHo3VlpzZHpGRUwzV0JkRks0dkVmREUmY29tcG9uZW50cz1idXR0b25zIiwiYXR0cnMiOnsiZGF0YS11aWQiOiJjODM1MTMxNGE5X210aTZudGc2bnRhIn19&xcomponent=1&version=5.0.202&token=3PR250014U6837348'
    const config = {
        height : 300,
        width : 300
    }

    window.open(url, "", "width=450, height=500")
    
}