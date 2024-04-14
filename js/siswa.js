var page = 1;

var current_page = 1;

var total_page = 0;

var is_ajax_fire = 0;


manageData();


/* manage data list */

function manageData() {

    $.ajax({

        dataType: 'json',

        url: url,

        data: { page: page }

    }).done(function (data) {


        total_page = data.total % 5;

        current_page = page;


        $('#pagination').twbsPagination({

            totalPages: total_page,

            visiblePages: current_page,

            onPageClick: function (event, pageL) {


                page = pageL;


                if (is_ajax_fire != 0) {

                    getPageData();

                }

            }

        });


        manageRow(data.data);


        is_ajax_fire = 1;


    });

}


/* Get Page Data*/

function getPageData() {


    $.ajax({

        dataType: 'json',

        url: url,

        data: { page: page }

    }).done(function (data) {


        manageRow(data.data);


    });


}


/* Add new Item table row */

function manageRow(data) {


    var rows = '';


    $.each(data, function (key, value) {


        rows = rows + '<tr>';

        rows = rows + '<td>' + value.nisn + '</td>';

        rows = rows + '<td>' + value.nama + '</td>';
        rows = rows + '<td>' + value.jenis_kelamin + '</td>';

        rows = rows + '<td>' + value.alamat + '</td>';
        rows = rows + '<td>' + value.date + '</td>';

        rows = rows + '<td data-id="' + value.id + '">';

        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';

        rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';

        rows = rows + '</td>';

        rows = rows + '</tr>';


    });


    $("tbody").html(rows);


}


/* Create new Item */

$(".crud-submit").click(function (e) {


    e.preventDefault();


    var form_action = $("#create-item").find("form").attr("action");

    var nisn = $("#create-item").find("input[name='nisn']").val();

    var nama = $("#create-item").find("input[name='nama']").val();
    var jenis_kelamin = $("#create-item").find("input[name='jenis_kelamin']").val();


    var alamat = $("#create-item").find("textarea[name='description']").val();
    var date = $("#create-item").find("input[name='date']").val();



    $.ajax({

        dataType: 'json',

        type: 'POST',

        url: form_action,

        data: { nisn: nisn, nama: nama, jenis_kelamin: jenis_kelamin, alamat: alamat, date: date }

    }).done(function (data) {


        getPageData();

        $(".modal").modal('hide');

        toastr.success('Item Created Successfully.', 'Success Alert', { timeOut: 5000 });


    });


});


/* Remove Item */

$("body").on("click", ".remove-item", function () {


    var id = $(this).parent("td").data('id');

    var c_obj = $(this).parents("tr");


    $.ajax({

        dataType: 'json',

        type: 'delete',

        url: url + '/' + id,

    }).done(function (data) {


        c_obj.remove();

        toastr.success('Item Deleted Successfully.', 'Success Alert', { timeOut: 5000 });

        getPageData();


    });


});


/* Edit Item */

$("body").on("click", ".edit-item", function () {


    var id_siswa = $(this).parent("td").data('id_siswa');

    var nisn = $(this).parent("td").prev("td").prev("td").text();

    var nama = $(this).parent("td").prev("td").text();
    var jenis_kelamin = $(this).parent("td").prev("td").prev("td").text();

    var alamat = $(this).parent("td").prev("td").text();
    var date = $(this).parent("td").prev("td").prev("td").text();



    $("#edit-item").find("input[name='nisn']").val(nisn);


    $("#edit-item").find("input[name='nama']").val(nama);

    $("#edit-item").find("input[name='jenis_kelamin']").val(jenis_kelamin);



    $("#edit-item").find("textarea[name='alamat']").val(alamat);


    $("#edit-item").find("input[name='date']").val(date);

    $("#edit-item").find("form").attr("action", url + '/update/' + id_siswa);


});


/* Updated new Item */

$(".crud-submit-edit").click(function (e) {


    e.preventDefault();


    var form_action = $("#edit-item").find("form").attr("action");

    var nisn = $("#edit-item").find("input[name='nisn']").val();
    var nama = $("#edit-item").find("input[name='nama']").val();
    var jenis_kelamin = $("#edit-item").find("input[name='jenis_kelamin']").val();
    var alamat = $("#edit-item").find("textarea[name='alamat']").val();
    var date = $("#edit-item").find("input[name='date']").val();

    $.ajax({

        dataType: 'json',

        type: 'POST',

        url: form_action,

        data: { title: title, description: description }

    }).done(function (data) {


        getPageData();

        $(".modal").modal('hide');

        toastr.success('Item Updated Successfully.', 'Success Alert', { timeOut: 5000 });


    });


});