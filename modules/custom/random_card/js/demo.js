(function($, Drupal){
    Drupal.behaviors.demo = {
        attach: function (context, settings){
            console.log({ context, settings });
            //Programacion del modulo

            const container = $('#demo');
            let html = '';

            _.map(['Beholder', 'Yarok, the Desacrated', 'Wyleth, Soulsteel', 'Orvar, The Thousand faces'], function(card){ 
                html += `<li>${card}</li>`;
            });

            container.html(html);
        }
    };
})(jQuery, Drupal);