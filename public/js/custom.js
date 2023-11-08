$('document').ready(function(){
$("button").click(function(){
$(this).siblings().toggleClass('dropdown-show');});
$(".btn-secondary").click(function(){
$(this).siblings().toggleClass('dropdown-show');});
$("body").on("click", ".right-icon-img", function () {
$(this).siblings("ol").toggleClass('d-block');
$(this).toggleClass('rotate');});
$("body").on("click", "#add-new-imi-btn", function () {
$(this).siblings("ol").addClass("d-block");
$(this).siblings("div:first-child").addClass('rotate');});
// $("body").on("click", "#DeleteRow", function () {
// $(this).parents("#row").remove();});
});



