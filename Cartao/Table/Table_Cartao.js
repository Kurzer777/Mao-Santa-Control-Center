$(document).ready(function(){

         $('#Table_Cartao_btn').click(function(){
                  $('#Table_Cartao_Nome').html('');
                  $('#Table_Cartao_Email').html('');
                  $('#Table_Cartao_Telefone').html('');
                  $('#Table_Cartao_Comentario').html('');

                  $('#Table_Cartao_Nome').append('<p class="Tab_Cartao">Nome</p>');
                  $('#Table_Cartao_Email').append('<p class="Tab_Cartao">E-mail</p>');
                  $('#Table_Cartao_Telefone').append('<p class="Tab_Cartao">Telefone</p>');
                  $('#Table_Cartao_Comentario').append('<p class="Tab_Cartao">Comentario</p>');

                  $.post('Cartao/Table/Counter.php',{}, function(data){
                         var Counter = data;

                         var getheight = $('.modal-body').height();

                         var height_tab = getheight + Counter * 50;

                         var height_tab_string = height_tab + "px";

                         $('.modal-body').css('height', height_tab_string);

                         $('.modal-dialog').css('height', height_tab_string);

                         $('.modal-body').css('width', '1000px');

                         $('.modal-dialog').css('width', '1000px');

                         $.post('Cartao/Table/Table_Cartao_Nome.php',{}, function(data){
                                 var itemArray_Nome = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Cartao_Nome').append('<p class="Tab_Cartao">' + itemArray_Nome[i] + '</p>');
                                 }
                         });

                         $.post('Cartao/Table/Table_Cartao_Email.php',{}, function(data){
                                 var itemArray_Email = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Cartao_Email').append('<p class="Tab_Cartao">' + itemArray_Email[i] + '</p>');

                                 }
                         });

                         $.post('Cartao/Table/Table_Cartao_Telefone.php',{}, function(data){
                                 var itemArray_Telefone = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Cartao_Telefone').append('<p class="Tab_Cartao">' + itemArray_Telefone[i] + '</p>');

                                 }
                         });

                         $.post('Cartao/Table/Table_Cartao_Comentario.php',{}, function(data){
                                 var itemArray_Comentario = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Cartao_Comentario').append('<p class="Tab_Cartao">' + itemArray_Comentario[i] + '</p>');

                                 }

                         });

                  });

         });
});