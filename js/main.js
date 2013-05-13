(function($){

  var Sub = {
    init : function() {
      var els = {
        trigger : $('.subscribe-btn'),
        frm : $('.subscribe-form form')
      }

      els.trigger.on('click', function() {
        if (els.frm.is('.open')) {
          els.frm.slideUp(300).removeClass('open');
        } else {
          els.frm.slideDown(300).addClass('open');
        }
      });
    }
  }

  $(document).ready(function(){
    Sub.init();
  });
})(jQuery);