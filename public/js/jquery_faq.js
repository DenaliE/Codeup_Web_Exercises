$('document').ready(function() {

            $('#link').click(function(event) {
                event.preventDefault();
                $('dd').toggleClass('invisible');
         });
});
