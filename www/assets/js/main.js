function sendAjax(element){
    var operation = $(element).parent().attr('data-operation');
    alert(operation);
}

$("input[type=text]").on('keyup', function(e){
    if(e.key === 'Enter' || e.keyCode === 13){
        var response = sendAjax(this);
    }
});