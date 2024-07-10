$(document).ready(()=>{
    $.get("Includes/GetLoginData.inc.php",(data)=>{
        $("#login").html(data)
    })
})