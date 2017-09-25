$(document).ready(function(){
    if($(".patient-cpwd").length>0){
        $('.cpwd-form').bind('submit', function(){
            if(!$("input[name='oldpwd']").val()){
                $("input[name='oldpwd']").focus();
                return false;
            }
            if(!$("input[name='newpwd']").val()){
                $("input[name='newpwd']").focus();
                return false;
            }
            $(".subBtn").attr("disabled","true");
            $(".error-box").hide();
            $(this).ajaxSubmit({         
                type: 'post',  
                url: '/patient/cpwd', 
                dataType : "json", 
                success: function(response) { 
                    if(response.code==0){
                        window.location.href = response.data;
                    }else{
                        $(".error-box").text(response.msg);
                        $(".error-box").show();
                        $(".subBtn").removeAttr('disabled');
                    }
                }
            });
            return false; 
        });
    }
  	
});