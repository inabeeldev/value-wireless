$('document').ready(function(){




$("button").click(function(){

$(this).siblings().toggleClass('dropdown-show');


});
$(".btn-secondary").click(function(){

$(this).siblings().toggleClass('dropdown-show');


});

$(".right-icon-img").click(function(){
$(".imie-form-inner").toggleClass('d-block');
$(this).toggleClass('rotate');
});
// $("#add-imie-btn").click(function(){
// $('table').html('');
// });

 $("#add-imie-btn").click(function () {

    var id = 1;
    id++;


            newRowAdd =
                '<div id="row"> <div class="input-group">' +
                '<div class="input-group-prepend">' +
                '<input type="text" placeholder="Enter or scan IMEI/SN/barcode or start typing names of goods" class="form-control m-input" name="imie'+id +' "/> ' +
                '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash">  <h6 class="cross mini">  &times;</h6></i></button> </div></div> </div>';
 
            $('table').append(newRowAdd);
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })




});
