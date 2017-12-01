$(document).ready(function() {

    $("#isActive").prop("checked", true).change(function (){

        var dataID= $(this).attr("dataID");

        $.post(
           "http://localhost:8080/educommerce/dealer/isActiveSetter",
            {id:dataID},
           function(data) {
               alert(data);
           });



    });


        $(".removeBtn").click(function () {

            var dataURL= $(this).attr("dataURL");
            var remove=confirm("silmek istediğinize Eminmisiniz?");
            if(remove==true){

                window.location.href=dataURL;


            }
        });


            $("#test").click(function () {

                        notif({
                            'type': 'success',
                            'msg': 'Yeah!',
                            'position': 'right',
                            'fade':'true'
                        })


        });


    })