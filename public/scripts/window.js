/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function openMenu(x) {
        x.classList.toggle("change");
        console.log(x);
        if($('#menuContainer').is(':visible')){
            $('#menuContainer').slideUp( 400, function() {
                // Animation complete.
              });
        }else{
            $('#menuContainer').slideDown( 400, function() {
                // Animation complete.
                 $('#menu a').click(function(event) {
                     event.preventDefault();
                    $('#menuContainer').removeClass('change');
                    var url = $(this).attr('href');
                    window.location = url;
                  });
              });
        }
    }
