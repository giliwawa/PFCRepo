$(document).ready(function(){
    var quantity = [];
    var prix = [];
    $("input").each(function(i,elt){
        quantity[i] = parseFloat($(this).val());
        //console.log("init_qqte"+quantity);
    });
    for(var x=0;x < quantity.length;x++)
    {
        prix[x] = parseFloat($("tr:eq("+(x+1)+") td:eq(2)").html());
    }

    var total = 0;
    for(var x = 0;x < prix.length; x++){
        total += quantity[x] * prix[x];
    }
    $("#total").html(total+"DT");
    
    $("input").each(function(i,elt){
        $(this).change(function(){
            total = 0;
            var tmp = parseFloat($(this).val());
            if(tmp !== 'NaN'){
                quantity[i]=tmp;
            }
            
            console.log("qtte ="+quantity);
            
            console.log("prix ="+prix);
            for(var x = 0;x < prix.length; x++){
                total += quantity[x] * prix[x];
            }
            $("#total").html(total+"DT");
        });
    });
    
    
});