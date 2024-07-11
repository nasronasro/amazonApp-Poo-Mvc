$(document).ready(()=>{
    $(".deleteProduct").click((event)=>{
        var id = event.target.id.substring(13)
        console.log(id);
        $.post("Includes/DeleteProduct.inc.php",{
            idDel : id
        },(Response)=>{
            console.log(Response);
        });
    })
    $(".modifyProduct").click((event)=>{
        var id = event.target.id.substring(13)
        console.log(id);
        $.post("Includes/ModifyProduct.inc.php",{
            idMod : id
        },(Response)=>{
            $(".display").html(Response);
            $(".display").Attr("class","divPop")
            console.log(Response);
        });
    })
    $(".deleteCategory").click((event)=>{
        var id = event.target.id.substring(14)
        console.log(id);
        $.post("Includes/DeleteCategory.inc.php",{
            idDel : id
        },(Response)=>{
            console.log(Response);
        });
    })
    $(".modifyCategory").click((event)=>{
        var id = event.target.id.substring(14)
        console.log(id);
        $.post("Includes/ModifyCategory.inc.php",{
            idMod : id
        },(Response)=>{
            $(".display").html(Response);
            $(".display").Attr("class","divPop")
            console.log(Response);
        });
    })
})