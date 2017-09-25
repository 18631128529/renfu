
    var sy,sm,sd;
    sy = $(".year-select option:selected").val();
    sm = $(".month-select option:selected").val();
    $(".year-select,.month-select").change(function(){
        sy = $(".year-select option:selected").val();
        sm = $(".month-select option:selected").val();
        render(sy, sm)
    })
    function render(y, m){
        var objDate=new Date;
        var year=objDate.getFullYear(); 
        var month=objDate.getMonth()+1;
        $.post("/booking/index", {y:y, m:m}, function(data){
            var html = '';
            var dates = data.date;
            var len = data.len;
            for(var i=1; i<=len; i++){
                html += '<tr>';
                for(var j=1; j<=7; j++){
                    var bc = "#fff";
                    if(dates[i][j]){
                        if(y==year && m==month && dates[i][j]['day']==data['day']){
                            bc = "#e0ffff";
                        }else if(dates[i][j]['num']==0) bc = "#eee";
                    }else bc = "#eee";
                    html += '<td style="background-color:'+ bc +'">';
                    if(dates[i][j]){
                        html += '<div>' + 
                        '<span>' + dates[i][j]['day'] + '</span>';
                        if(dates[i][j]['num']!=0){
                            html += '<p>' + dates[i][j]['num'] + '</p>'
                        }
                        html += '</div>';
                    }
                    html += '</td>';
                }
                html += '<tr>';
            }
            $(".date-list").html(html);
        }, 'json')
    }
    render(sy, sm)

    $("body").on("click", ".date-list tr td", function(){
        var op = $(this).find("p");
        if(op.length>0){
            sd = $(this).find("span").text();
            $("body").find(".date-list tr td").removeClass("day-selected");
            $(this).addClass("day-selected");
        }
    })
    $(".bookingBtn").click(function(){
        if($("body").find(".day-selected").length<1){
            return false;
        }else{
            var tx = "您确定要预约"+sy+"年"+sm+"月"+sd+"日吗？";
            $(".modalMsg").text(tx);
            $("#msbModal").modal('show');
        }
    })
    $(".subBooking").click(function(){
        $("#msbModal").modal('hide');
        $.post("/booking/add", {y:sy, m:sm, d:sd}, function(response){
            alert(response.msg);
            if(response.code==0){
                window.location.reload();
            }
        }, 'json')
    })
