     function myfunction() {
     $('#Question1').show();
     $('#Question2').hide();
     $('#Question3').hide();
     $('#Question4').hide();
     $('#Question5').hide();
 }


 $(document).ready(function () {
     
 $('#sbutton').click(function(){
$('#Question1').show();
     $('#Question2').hide();
     $('#Question3').hide();
     $('#Question4').hide();
     $('#Question5').hide();
     $('#Question6').hide();
     
 });

     $('#sub1').click(function(){
         if (typeof $("input[name='city']:checked").val() == "undefined") {
               alert("Please select the answer");
         } else{
             $('#Question1').hide();
             $('#Question2').show();
             $('#Question3').hide();
             $('#Question4').hide();
                 $('#Question5').hide(); 
         }
      
     });
     
          $('input:radio[name="city"]').change(function () {
         if ($(this).is(':checked') && $(this).val() == "AMARE") {
             $('#q1').css('color', 'green');
             $('#q2').css('color', 'red');
              $('#starno').addClass('correct');
         } else {
             $('#q1').css('color', 'green');
             $('#q2').css('color', 'red');
         }
     });
     
  $('input:radio[name="flight"]').change(function () {
         if ($(this).is(':checked') && $(this).val() == "BOOM") {
             $('#q4').css('color', 'green');
             $('#q3').css('color', 'red');
              $('#starto').addClass('correct');
         } else {
             $('#q4').css('color', 'green');
             $('#q3').css('color', 'red');
         }
     });

  $('input:radio[name="mall"]').change(function () {
         if ($(this).is(':checked') && $(this).val() == "THE LOOP") {
               $('#starth').addClass('correct');
             $('#q6').css('color', 'green');
             $('#q5').css('color', 'red');
           
         } else {
             $('#q6').css('color', 'green');
             $('#q5').css('color', 'red');
         }
     });
     
     

$('#sub2').click(function(){
         if (typeof $("input[name='flight']:checked").val() == "undefined") {
               alert("Please select the answer");
         } else{
             $('#Question1').hide();
             $('#Question2').hide();
             $('#Question3').show();
             $('#Question4').hide();
              $('#Question5').hide();
         }
     });
     
     $('#sub3').click(function(){
         if (typeof $("input[name='mall']:checked").val() == "undefined") {
               alert("Please select the answer");
         } else{
             $('#Question1').hide();
             $('#Question2').hide();
             $('#Question3').hide();
             $('#Question4').show();
              $('#Question5').hide();
         }
     });
     
   
     
     $("#sub4").click(function(){
         var ansp = $('#impanswer').val();
         if(ansp==""){
             alert("Please fill the answer");
         }else{
           $('#Question5').show();
         $('#Question1').hide();
           $('#Question2').hide();
     $('#Question3').hide();
     $('#Question4').hide();
         }
         
     });
     
     $('#subbt').click(function(e){
        var n = $('#Name').val();
         var m = $('#Surname').val();
         var o = $('#Email').val();
         if(n==""){
             alert("Name cannot be empty");
             return false;
         }
         if(m==""){
             alert("Surname cannot be empty");
             return false;
         }
           if(o==""){
             alert("Email cannot be empty");
               return false;
         }
     });
  
 });


