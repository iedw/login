$(function(){
    $("#nome").keyup(function(){
        var nome = $(this).val();

        var data = {
            dado : nome
        }
        $.post('http://127.0.0.1/login/PHP/pesUsuar.php', data, function(retorno){
            $(".teste").html(retorno);
        });
    });
});