$(document).ready(function(){
    // Check admin pwd; correct or not
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        $.ajax({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/check-current-password',
            data:{current_pwd:current_pwd},
            success:function(resp){
                if(resp=="false"){
                    $("#verifyCurrentPwd").html("Current Password is Incorrect!");
                }else if(resp=="true"){
                    $("#verifyCurrentPwd").html("Current Password is Correct!");
                }
            },error:function(){
                alert("Error");
            }
        })
    });
});