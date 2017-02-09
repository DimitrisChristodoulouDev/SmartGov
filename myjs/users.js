$('document').ready(function () {

    showusers('admin');

    $('.nav-pills li a').on('show.bs.tab', function () {
        var id = $(this).attr('id');
        if (id == 'showuser') showusers('user')
        else  showusers('admin')
    });

    $("#addmodal").on('hide.bs.modal', function () {
        $("#add_user_validation")[0].reset();
        $("#add_user_validation").validate().resetForm()
    });


    $('#add_user_validation').validate({

        rules: {
            email: {
                required: true,
                email: true,
            },
            id: {
                required: true,
            },
            name: {
                required: true,
            },
            surname: {
                required: true,
            },
            privilage: {
                required: true,
            },
        },
        messages: {
            email: {
                required: "Please give user's email"
            },
            privilage: "Please select user's permission",
            id: "Please give user's id",
            name: "Please give user's name",
            surname: "Please give user's surname",
        },

        highlight: function (input) {
            $(input).parents('.form-line').addClass('has-error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: adduser
    });

});

var showusers = function (privilage) {
    console.log(privilage)
    $.ajax({ //to ajax ekteli to data.php dinontas tin timi tis imerominias gia na kanei epiloges pexnidion
        type: 'POST',
        url: 'php/users.php',
        dataType: 'json',
        data: {
            get_option: privilage,
            choice: 1//timi tis function pou 8elo na kaleso
        },
        success: function (data1) {
            console.log(data1);
            $('#table').bootstrapTable({
                data: data1,
                dataType: 'json',
                pagination: true,
                pageList: ['10', '25', '50', '100', 'All'],
                search: true,
                showExport: true,
                exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf', 'doc', 'png'],
                exportOptions: {fileName: 'Users_File'},
                showPaginationSwitch: true,
                toolbar: "#toolbar",
                showColumns: true,
                checkboxHeader: true,
                showHeader: true,
                checkbox: true,
                clickToSelect: true,
                columns: [
                    {
                        field: 'state',
                        checkbox: true,
                        align: 'center',
                        valign: 'middle'
                    }, {

                        align: 'center',
                        width: '400px',
                        sortable: true,
                        field: 'id',
                        title: 'Id',
                    }, {
                        align: 'center',
                        width: '50px',
                        sortable: true,
                        field: 'name',
                        title: 'Name',
                    }, {
                        align: 'center',
                        width: '500px',
                        sortable: true,
                        field: 'surname',
                        title: 'Surname'
                    }, {
                        align: 'center',
                        width: '500px',
                        sortable: true,
                        field: 'email',
                        title: 'Email'
                    }, {
                        align: 'center',
                        width: '500px',
                        sortable: true,
                        field: 'operate',
                        title: 'Edit/Delete',
                        events: operateEvents,
                        formatter: operateFormatter
                    }]
            });
            $('#table').bootstrapTable('load', data1);

            //$('#table').bootstrapTable('hideLoading');
        }

    });
}


window.operateEvents = {

    'click .edit': function (e, value, row, index) {

        editUser(row)
    },

    'click .remove': function (e, value, row, index) {
        console.log(row);

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false
        }, function () {
            removeUser(row.id)
        })
    }
};


var removeUser = function (id) {
    $.ajax({
        type: 'POST',
        url: 'php/users.php',
        dataType: 'text',
        data: {
            get_id: id,
            choice: 2//timi tis function pou 8elo na kaleso
        },
        success: function (data1) {
            console.log(data1)
            $('#table').bootstrapTable('remove', {
                field: 'id',
                values: [id]
            });
            swal('Deleted!', 'Your file has been deleted.', 'success');
        }
    });


}
var editUser = function (row) {
    alert(JSON.stringify(row))
    $('#myModal').modal('show');
    ///ajax
}


function operateFormatter(value, row, index) {
    return [
        '<a class="edit" href="javascript:void(0)" title="Edit">',
        '<i class="glyphicon glyphicon-edit"></i>',
        '</a>&nbsp;&nbsp;&nbsp;&nbsp;',
        '<a class="remove" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>'
    ].join('');
}


function adduser() {
    var data = $("#add_user_validation").serialize();
    var priv = $("#privilage").val();
    console.log(priv)
    $.ajax({
        type: 'POST',
        url: 'php/users.php',
        dataType: 'text',
        data: {
            get_data: data,
            choice: 3//timi tis function pou 8elo na kaleso
        },
        success: function (data1) {
            if (data1 == 1) {
                swal('Added!', 'You succesfully added a new ' + priv, 'success');
                console.log(data1)

                showusers(priv);
                $("#add_user_validation")[0].reset();
                $("#addmodal").modal('hide');
            }

            else if (data1 == "dublicate") {
                swal('Error!', 'This person has account', 'error');
                $("#add_user_validation")[0].reset();
                $("#addmodal").modal('hide');
                console.log(data1)
            } else if (data1 == "email_exist") {
                swal('Error!', 'This email exists', 'error');
                $("#add_user_validation")[0].reset();
                $("#addmodal").modal('hide');
                console.log(data1)
            }
            else {
                swal('Error!', 'You failed to add a new ' + priv, 'error');
                $("#add_user_validation")[0].reset();
                $("#addmodal").modal('hide');
                console.log(data1)
            }


        }

    });
}