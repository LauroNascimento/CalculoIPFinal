// test button
$(document).ready(function(){
       $('#enviar').click(function () {
                    $.get("ip.php",
                        {
                        'pritrinca': $('#pritrinca').val(),
                        'segtrinca': $('#segtrinca').val(),
                        'tritrinca': $('#tritrinca').val(),
                        'quatrinca': $('#quatrinca').val(),
                        'mask':     $('#mask').val()
                      },
                      function(data){
                     $(".result").html(data);
                    });

                     $(".result").css("background-color","#4C1887")
                     $(".result").css("width","auto")
                     $(".result").css("margin","10px")
                     $(".result").css("border-radius","200px")
                     $(".result").css("border-top-right-radius", "1px")
                     $(".result").css("border-bottom-left-radius", "1px")
                     $(".result").css("border-bottom-left-radius", "1px")
                     $(".result").css("border-top-color","#7D2AC3")
                     $(".result").css("border-left-color","#7D2AC3")
                     $(".result").css("border-right-color","#440091")
                     $(".result").css("border-bottom-color","#440091")
                     $(".result").css("border-style","outset")
                     $(".result").css("margin-left","30px")
                     $(".result").css("margin-right","30px")
                    });


                    $("#test").click(function(){
                      alert("JQuery tranquilamente tranquilo.")
                    });


});


// <input type="text" name="pritrinca" id="pritrinca" placeholder="Trinca 1">
//
// <input type="text" name="segtrinca" id="segtrinca" placeholder="Trinca 2">
//
// <input type="text" name="tritrinca" id="tritrinca" placeholder="Trinca 3">
//
// <input type="text" name="quatrinca" id="quatrinca" placeholder="Trinca 4">