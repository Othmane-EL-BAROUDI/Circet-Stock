
const a =document.querySelector("#exampleModal")
const start =document.querySelector("#exampleModal")
a.addEventListener('load', function (event) {
  console.log("sq")
  var button = event.relatedTarget;
  var customerId = button.data('customer-id');
     document.querySelector("#customerId").TextContent= customerId;
})