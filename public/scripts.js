$("#mainHeader").ready(function(){
    $.ajax({
        type: "GET",
        url: "/assets/dashboard.ajax.php",
        dataType: "html",
        success: function(html) {
            $("#adminPanel").html(html);
        }
    });
});

$("#dashboardButton").click(function(){
    $.ajax({
        type: "GET",
        url: "/assets/dashboard.ajax.php",
        dataType: "html",
        success: function(html) {
            $("#adminPanel").html(html);
        }
    });
});

$("#customersButton").click(function(){
    $.ajax({
        type: "GET",
        url: "/assets/customers.ajax.php",
        dataType: "html",
        success: function(html) {
            $("#adminPanel").html(html);
        }
    });
});

// //Retrieve Count of Domains From DO

// $("#activeDomains").ready(function(){
//     $.ajax ({
//         url: "https://api.digitalocean.com/v2/domains",
//         contentType: "application/json",
//         type: "GET",
//         beforeSend: function(xhr){
//             xhr.setRequestHeader("Authorization", '');
//         },
//         success: function(result) {
//             let instanceCount = result.meta.total;
//             $("#domainCount").html(instanceCount);
//         }
//     });
// });

// //Retrieve Count of Droplets From DO
// $("#activeInstances").ready(function(){
//     $.ajax ({
//         url: "https://api.digitalocean.com/v2/droplets?status=active",
//         contentType: "application/json",
//         type: "GET",
//         beforeSend: function(xhr){
//             xhr.setRequestHeader("Authorization", '');
//         },
//         success: function(result) {
//             let instanceCount = result.meta.total;
//             $("#activeInstanceCount").html(instanceCount);
//             // console.log(result.meta.total);
//         }
//     });
// });
// //Retrieve Count of Floating IP's From DO
// $("#floatingIPs").ready(function(){
//     $.ajax ({
//         url: "https://api.digitalocean.com/v2/floating_ips",
//         contentType: "application/json",
//         type: "GET",
//         beforeSend: function(xhr){
//             xhr.setRequestHeader("Authorization", '');
//         },
//         success: function(result) {
//             let floatingIPCount = result.meta.total;
//             $("#floatingIPCount").html(floatingIPCount);
//             // console.log(result);
//         }
//     });
// });
// //Retrieve Current Invoice Amount From DO
// $("#currentInvoice").ready(function(){
//     $.ajax ({
//         url: "https://api.digitalocean.com/v2/customers/my/invoices",
//         contentType: "application/json",
//         type: "GET",
//         beforeSend: function(xhr){
//             xhr.setRequestHeader("Authorization", '');
//         },
//         success: function(result) {
//             let invoiceAmount = result.invoice_preview.amount;
//             $("#invoiceAmount").html(invoiceAmount);
//             // console.log(result);
//         }
//     });
// });
