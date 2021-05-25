function sendAjax(element){
    var operation = $(element).parent().attr('data-operation');
    var data = $(element).parent().serialize();
    
    $.ajax({
        type: 'POST',
        url: '/core/handler.php',
        data: data + '&operation=' + operation
    });
}
