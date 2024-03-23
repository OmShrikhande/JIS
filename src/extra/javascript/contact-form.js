
    $.getScript('https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', function() {
     
     var $footerForm = $('form[name="ContactForm"]'),
         $successMsg = $(".alert");
     $.validator.addMethod("letters", function(value, element) {
         return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
     });
     
       $footerForm.validate({
           rules: {
               first_name: {
                   required: !0,
                   minlength: 3,
                   letters: !0
               },
           },
           errorPlacement: function(error, element) {
               return !1
           },
           submitHandler: function(evt) {
               $("#loader").show();
               submitContactForm();
               $('form[name="ContactForm"]').hide().submit(function(evt) {
                   evt.preventDefault()
               });
               return !1
           },
           highlight: function(element) {
               $(element).css('border', '1px solid red')
           },
           unhighlight: function(element) {
               $(element).css('border', '1px solid #4CAF50')
           }
       })
     
     $(document).ready(function() {
         $("#loader").hide();
     });
     
     function submitContactForm() {
     
         $("#loader").show();
         $('form[name="ContactForm"]').hide();
         var formData = JSON.stringify($('form[name="ContactForm"]').serializeArray());
     
         var clientData = {
             'username': 'jain_school',
             'password': '@flying007'
         }
         var data = {
             'form': formData,
             'client': clientData
         }
         jQuery.ajax({
             type: "POST",
             url: "https://contacts.flyingpenguins.co/s2ebea708u/contacts/save",
             data: data,
     
             success: function(resp) {
                 $(".form-message h3").css({
                     "color": "#000"
                 }).text("Thanks. We have received your enquiry.");
     
                 $("#loader").hide();
                  $('form[name="ContactForm"]').trigger('reset');
               $('form[name="ContactForm"]').show();
     
             },
             failure: function(error) {
                 $(".form-message h3").css({
                     "color": "#000;"
                 }).text("Something went wrong. Please try again");
             }
         });
     }
     $(function() {});
     });
