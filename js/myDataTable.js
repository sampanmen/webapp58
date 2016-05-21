function createtable(url,append,table) {
    var url = "../control/control.admin.getRoom.php";
    $.post(url, function (data) {
        var jsonData = jQuery.parseJSON(data);
        var i = 1;
        for (var key in jsonData) {
            var t = "<tr>";
            t = t + "<td class='text-center'>" + i + "</td>";
            t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
            t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
            t = t + "<td class='text-center'>" + jsonData[key]['classRoom'] + "</td>";
            t = t + "<td>" + jsonData[key]['titlename'] + jsonData[key]['name'] + " " + jsonData[key]['surname'] + "</td>";
            t = t + "<td><button class='btn btn-default'><a href='../Admin/AviewStudent.php?roomid=" + jsonData[key]['idClass'] + "' >รายละเอียด</a></button></td>";
            t = t + "</tr>";
            i++;
            $("#tbodySubject").append(t);

        }
        //console.log($("#tbody").html());
        $('#dataTables-SallSubject').DataTable({
            responsive: true
        });
    });
}