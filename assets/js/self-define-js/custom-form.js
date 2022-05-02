// var checkForm = jscheckForm == 1 ? true : false;
$("#clickBtnCreate").click(function(){
    $('#readForm').toggle('formTurnLeft');
    checkForm == true ? checkForm = false : checkForm;
    $('#createForm').removeClass('d-none');
});

$("#btnCreate_Back").click(function(e){
    e.preventDefault();
    $('#readForm').toggle('formTurnLeft');
    $('#createForm').addClass('d-none');
});

$("#clickBtnUpdate").click(function(){
    $('#readForm').toggle('formTurnLeft');
    checkForm == true ? checkForm = false : checkForm;
    $('#updateForm').removeClass('d-none');
});

$("#btnUpdate_Back").click(function(e){
    e.preventDefault();
    $('#readForm').toggle('formTurnLeft');
    $('#updateForm').addClass('d-none');
});