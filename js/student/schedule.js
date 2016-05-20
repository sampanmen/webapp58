$(document).ready(function () {
    var url = 'http://' + window.location.host + '/workshop_validate_ajax/getProductsJSON.php';
    $.get(url, '', function (result) {
        var data = JSON.parse(result);
        var day = [วันจันทร์,วันจันทร์];
        var htmlProduct = "";
        var i;
        for (key in data) {
            htmlProduct += "<tr>";
            htmlProduct += "<td>"+day+"</td>";
            htmlProduct += "<td>" + data[key].product_code + "</td>";
            htmlProduct += "</tr>";
            i++;
        }
        for (key in data) {
            htmlProduct += "<tr>";
            htmlProduct += "<td>วันอังคาร</td>";
            htmlProduct += "<td>" + data[key].product_code + "</td>";
            htmlProduct += "<td>" + data[key].product_name + "</td>";
            htmlProduct += "<td>" + data[key].price + "</td>";
            htmlProduct += "</tr>";
        }
        for (key in data) {
            htmlProduct += "<tr>";
            htmlProduct += "<td>วันพุธ</td>";
            htmlProduct += "<td>" + data[key].product_code + "</td>";
            htmlProduct += "<td>" + data[key].product_name + "</td>";
            htmlProduct += "<td>" + data[key].price + "</td>";
            htmlProduct += "</tr>";
        }
        for (key in data) {
            htmlProduct += "<tr>";
            htmlProduct += "<td>วันพฤหัสบดี</td>";
            htmlProduct += "<td>" + data[key].product_code + "</td>";
            htmlProduct += "<td>" + data[key].product_name + "</td>";
            htmlProduct += "<td>" + data[key].price + "</td>";
            htmlProduct += "</tr>";
        }
        for (key in data) {
            htmlProduct += "<tr>";
            htmlProduct += "<td>วันศุกร์</td>";
            htmlProduct += "<td>" + data[key].product_code + "</td>";
            htmlProduct += "<td>" + data[key].product_name + "</td>";
            htmlProduct += "<td>" + data[key].price + "</td>";
            htmlProduct += "</tr>";
        }
        $("#detailSchedule").html(htmlProduct);
    });


});


