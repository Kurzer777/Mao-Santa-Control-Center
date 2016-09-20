function handler1() {
    $(this).css('background-color', '#00FF3F')
    $(this).one("click", handler2);
}

function handler2() {
   $(this).css('background-color', 'white');
    $(this).one("click", handler1);
}

$(document).ready(function(){

         $('.Parceiros_Table_Servicos_value').click(function(){

                 var valtext = $(this).text();

                 $('#Parceiros_Table_btn').text(valtext);

                 $('#Parceiros_Table_btn').val(valtext);



                  $('#Table_Parceiros_Nome').html('');
                  $('#Table_Parceiros_Email').html('');
                  $('#Table_Parceiros_Telefone').html('');
                  $('#Table_Parceiros_Endereco').html('');
                  $('#Table_Parceiros_Servico').html('');
                  $('#Table_Parceiros_Status').html('');

                  $('#Table_Parceiros_Nome').append('<p class="Tab_Parceiros">Nome</p>');
                  $('#Table_Parceiros_Email').append('<p class="Tab_Parceiros">E-mail</p>');
                  $('#Table_Parceiros_Telefone').append('<p class="Tab_Parceiros">Telefone</p>');
                  $('#Table_Parceiros_Endereco').append('<p class="Tab_Parceiros">Endereco</p>');
                  $('#Table_Parceiros_Servico').append('<p class="Tab_Parceiros">Servico</p>');
                  $('#Table_Parceiros_Status').append('<p class="Tab_Parceiros">Status</p>');


                          var choise = $('#Parceiros_Table_btn').val();


                  $.post('Parceiros/Table/Counter.php',{choise: choise}, function(data){
                      

                         $('.modal-body').css('width', '1000px');

                         $('.modal-dialog').css('width', '1000px');



                         var getmargintop = $('#table_area_parceiros').css('marginTop');

                         var getmargintop_int = parseInt(getmargintop);

                         var getmargintop_int_new = getmargintop_int;

                         var getmargintop_string_new = getmargintop_int_new + 'px';



                         $('#table_area_parceiros').css('margin-top', getmargintop_string_new);

                         $('#table_area_parceiros').css('margin-bottom', '50px');

                         var Counter = data;

                         var getheight = $('.modal-dialog').height();

                         var height_tab = getheight + 50 + Counter * 45;

                         var height_tab_string = height_tab + "px";


                         var margin_bottom_neu = 50 + Counter *45;

                         var margin_bottom_neu_string = margin_bottom_neu + "px";



                         $('.modal-body').css('height', height_tab_string);

                         $('.modal-dialog').css('height', height_tab_string);

                         $('.modal-body').css('width', '1230px');

                         $('.modal-dialog').css('width', '1230px');

                         $('#table_area_parceiros').css('margin-bottom', margin_bottom_neu_string);



                         $.post('Parceiros/Table/Table_Parceiros_Nome.php',{choise: choise}, function(data){
                                 var itemArray_Nome = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Parceiros_Nome').append('<p class="Tab_Parceiros">' + itemArray_Nome[i] + '</p>');
                                 }
                         });

                         $.post('Parceiros/Table/Table_Parceiros_Email.php',{choise: choise}, function(data){
                                 var itemArray_Email = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Parceiros_Email').append('<p class="Tab_Parceiros">' + itemArray_Email[i] + '</p>');

                                 }
                         });

                         $.post('Parceiros/Table/Table_Parceiros_Telefone.php',{choise: choise}, function(data){
                                 var itemArray_Telefone = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Parceiros_Telefone').append('<p class="Tab_Parceiros">' + itemArray_Telefone[i] + '</p>');

                                 }
                         });

                         $.post('Parceiros/Table/Table_Parceiros_Endereco.php',{choise: choise}, function(data){
                                 var itemArray_Endereco = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Parceiros_Endereco').append('<p class="Tab_Parceiros">' + itemArray_Endereco[i] + '</p>');

                                 }

                         });

                           $.post('Parceiros/Table/Table_Parceiros_Servico.php',{choise: choise}, function(data){
                                 var itemArray_Servico = data.split("|");
                                 for(i=0;i<Counter;i++){
                                         $('#Table_Parceiros_Servico').append('<p class="Tab_Parceiros">' + itemArray_Servico[i] + '</p>');

                                 }

                         });

                           $.post('Parceiros/Table/Table_Parceiros_Status.php',{choise: choise}, function(data){
                                 var itemArray_Status = data.split("|");
                                 for(i=0;i<Counter;i++){

                                         var Status = itemArray_Status[i];

                                         var Color = "";

                                         if(Status == "livre"){

                                         Color = "A";

                                         }

                                         if(Status == "ocupado"){

                                         Color = "B";

                                         }


                                         $('#Table_Parceiros_Status').append('<p class="Tab_Parceiros_status'+ Color +'">' + itemArray_Status[i] + '</p>');

                                 }
                         });
                  });
         });
});