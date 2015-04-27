/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
   $("#show").html('<canvas id="myChart" width="400" height="400"></canvas>'); 
});

function testchart(labels,val){
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
new Chart(ctx).Bar(data, {
    barShowStroke: false
});

}

function getStat(){
    
    $.ajax({
        type: "POST",
        url: "../controller/statController.php",
        data: {action: "qte_prod"},
        cache: false,
        dataType : "json",
        success: function (html){
            var labelArray = [];
            var valArray = [];
            //console.log(data.produit);
            $.each(html,function(index,elt){
               //console.log(index+" "+element);
               //console.log(elt.produit);
               labelArray.push(elt.produit);
               valArray.push(elt.quantite);
               //array.push({elt.produit : elt.quantite});
            });
            testchart(labelArray,valArray);
            console.log(labelArray);
            console.log(valArray);

        }
    });
}

function charts(){
    
}

