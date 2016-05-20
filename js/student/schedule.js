$(document).ready(function () {
    var url = 'http://' + window.location.host + '/workshop_validate_ajax/getProductsJSON.php';
    $.get(url, '', function (result) {
        var data = JSON.parse(result);
        var htmlProduct = "";
        var i;
        for (key in data) {
            htmlProduct += "<tr>";
            htmlProduct += "<td>ju</td>";
            htmlProduct += "<td>" + data[key].product_code + "</td>";
            htmlProduct += "</tr>";
            i++;
        }
        
        $("#detailSchedule").html(htmlProduct);
    });


});


