$(document).ready(function(){

         $('#Table_Clientes_btn').click(function(){
                  $('#Table_Clientes_Nome').html('');
                  $('#Table_Clientes_Email').html('');
                  $('#Table_Clientes_Telefone').html('');
                  $('#Table_Clientes_Endereco').html('');
                  $('#Table_Clientes_Comentario').html('');

                  $('#Table_Clientes_Nome').append('<p class="Tab_Clientes">Nome</p>');
                  $('#Table_Clientes_Email').append('<p class="Tab_Clientes">E-mail</p>');
                  $('#Table_Clientes_Telefone').append('<p class="Tab_Clientes">Telefone</p>');
                  $('#Table_Clientes_Endereco').append('<p class="Tab_Clientes">Endereco</p>');
                  $('#Table_Clientes_Comentario').append('<p class="Tab_Clientes">Comentario</p>');


                  $.post('Clientes/Table/Counter.php',{}, function(data){
                         var Counter = data;

                         var getheight = $('.modal-body').height();

                         var height_tab = getheight + Counter * 40;

                         var height_tab_string = height_tab + "px";

                         $('.modal-body').css('height', height_tab_string);

                         $('.modal-dialog').css('height', height_tab_string);

                         $('.modal-body').css('width', '1100px');

                         $('.modal-dialog').css('width', '1100px');


                         $.post('Clientes/Table/Table_Clientes_Nome.php',{}, function(data){
                                 var itemArray_Nome = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Clientes_Nome').append('<p class="Tab_Clientes">' + itemArray_Nome[i] + '</p>');
                                 }
                         });

                         $.post('Clientes/Table/Table_Clientes_Email.php',{}, function(data){
                                 var itemArray_Email = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Clientes_Email').append('<p class="Tab_Clientes">' + itemArray_Email[i] + '</p>');

                                 }
                         });

                         $.post('Clientes/Table/Table_Clientes_Telefone.php',{}, function(data){
                                 var itemArray_Telefone = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Clientes_Telefone').append('<p class="Tab_Clientes">' + itemArray_Telefone[i] + '</p>');

                                 }
                         });

                         $.post('Clientes/Table/Table_Clientes_Endereco.php',{}, function(data){
                                 var itemArray_Endereco = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Clientes_Endereco').append('<p class="Tab_Clientes">' + itemArray_Endereco[i] + '</p>');

                                 }

                         });

                          $.post('Clientes/Table/Table_Clientes_Comentario.php',{}, function(data){
                                 var itemArray_Comentario = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Clientes_Comentario').append('<p class="Tab_Clientes">' + itemArray_Comentario[i] + '</p>');

                                 }

                         });

                  });

         });
});