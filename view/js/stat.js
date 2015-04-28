/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $(document).ready(function() {

    $('select').material_select();
    
    $("body").on("change", "#action", function(){
        console.log("testChange");
        var act = $('select').val();
        console.log('act = '+act);
        getStat(act);
    });
  });
            
function initCanvas(){
    
    var content = '<div class="row"><div class="input-field col s4"><select id="action" class="browser-default"><option value="1" disabled selected>Filter</option><option value="qte_prod">Sales by Product</option><option value="qte_month">sales by Month</option></select></div></div>';
    $("#show").html(content);
    content = '<div id="" class="row"><canvas id="myChart" class="col s12"></canvas></div>';
    $("#show").append(content);
}

function testchart(labels,val,action){
    
    var ctx = document.getElementById("myChart").getContext("2d");
    var data = {
    labels: labels,
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            data: val
        }
    ]
    };
    ;
    var chart = new Chart(ctx);
    
    console.log(action);
    if(action === 'qte_prod'){
        chart.Bar(data, {
        barShowStroke: false
        });   
    }
    
    if(action === 'qte_month'){
        chart.Line(data, {
        bezierCurve: false
        });
    }
    
}

function getStat(action){
    
    $.ajax({
        type: "POST",
        url: "../controller/statController.php",
        data: {action: action},
        cache: false,
        dataType : "json",
        success: function (html){
            var labelArray = [];
            var valArray = [];
            
            $.each(html,function(index,elt){
               /*labelArray.push(elt.produit);
               valArray.push(elt.quantite);*/
                var i=0;
                $.each(elt,function(key,val){
                    if(i % 2 === 0){
                        labelArray.push(val);
                        console.log(val);
                        i = 1;
                    }
                    else{
                        valArray.push(val);
                        i = 0;
                        console.log(val);
                    }
                });
            });
            testchart(labelArray,valArray,action);
        }
    });
}


