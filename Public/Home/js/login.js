$(document).ready(function(){
  	$(".form-item input").focus(function(){
  		$(this).parent().css("border-bottom-color", "#e88e1a")
  	})
  	$(".form-item input").focusout(function(){
  		$(this).parent().css("border-bottom-color", "#ccc")
  	})
  	$('.login-form').bind('submit', function(){
        if(!$("input[name='account']").val()){
            $("input[name='account']").focus();
            return false;
        }
        if(!$("input[name='pwd']").val()){
            $("input[name='pwd']").focus();
            return false;
        }
        $(".loginbtn").attr("disabled","true");
        $(".error-box").hide();
        $(this).ajaxSubmit({         
            type: 'post',  
            url: '/site/login', 
            dataType : "json", 
            success: function(response) { 
                if(response.code==0){
                    window.location.href = response.data;
                }else{
                    $(".error-box").text(response.msg);
                    $(".error-box").show();
                    $(".loginbtn").removeAttr('disabled');
                }
            }
        //$(this).resetForm(); // 提交后重置表单
        });
        return false; 
    });
});