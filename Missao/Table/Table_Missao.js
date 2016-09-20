function handler1() {
    $(this).css('background-color', '#00FF3F')
    $(this).one("click", handler2);
}

function handler2() {
   $(this).css('background-color', 'white');
    $(this).one("click", handler1);
}

$(document).ready(function(){

         $('#Table_Missao_btn').click(function(){
                 $('#Table_Missao_Nome').html('');
                 $('#Table_Missao_Cliente').html('');
                 $('#Table_Missao_Endereco').html('');
                 $('#Table_Missao_Parceiro').html('');
                 $('#Table_Missao_Servico').html('');
                 $('#Table_Missao_Visito').html('');
                 $('#Table_Missao_Pronto').html('');

                 $('#Table_Missao_Nome').append('<p class="Tab_Missao">Nome</p>');
                 $('#Table_Missao_Cliente').append('<p class="Tab_Missao">Cliente</p>');
                 $('#Table_Missao_Endereco').append('<p class="Tab_Missao">Endereco</p>');
                 $('#Table_Missao_Parceiro').append('<p class="Tab_Missao">Parceiro</p>');
                 $('#Table_Missao_Servico').append('<p class="Tab_Missao">Servico</p>');
                 $('#Table_Missao_Visito').append('<p class="Tab_Missao">Visito?</p>');
                 $('#Table_Missao_Pronto').append('<p class="Tab_Missao">Pronto?</p>');

                 $.post('Missao/Table/Counter.php',{}, function(data){
                         var Counter = data;

                         $.post('Missao/Table/Table_Missao_Nome.php',{}, function(data){
                                 var itemArray_Nome = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Nome').append('<p class="Tab_Missao">' + itemArray_Nome[i] + '</p>');
                                 }
                         });

                         $.post('Missao/Table/Table_Missao_Cliente.php',{}, function(data){
                                 var itemArray_Cliente = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Cliente').append('<p class="Tab_Missao">' + itemArray_Cliente[i] + '</p>');
                                 }
                         });

                         $.post('Missao/Table/Table_Missao_Endereco.php',{}, function(data){
                                 var itemArray_Endereco = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Endereco').append('<p class="Tab_Missao">' + itemArray_Endereco[i] + '</p>');
                                 }
                         });

                         $.post('Missao/Table/Table_Missao_Parceiro.php',{}, function(data){
                                 var itemArray_Parceiro = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Parceiro').append('<p class="Tab_Missao">' + itemArray_Parceiro[i] + '</p>');
                                 }
                         });

                         $.post('Missao/Table/Table_Missao_Servico.php',{}, function(data){
                                 var itemArray_Servico = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Servico').append('<p class="Tab_Missao">' + itemArray_Servico[i] + '</p>');
                                 }
                         });

                         $.post('Missao/Table/Table_Missao_Visito.php',{}, function(data){
                                 var itemArray_Visito = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Visito').append('<p class="Tab_Missao">' + itemArray_Visito[i] + '</p>');
                                 }
                         });

                         $.post('Missao/Table/Table_Missao_Pronto.php',{}, function(data){
                                 var itemArray_Pronto = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Missao_Pronto').append('<p class="Tab_Missao">' + itemArray_Pronto[i] + '</p>');
                                 }
                         });

                  });

         });
});
