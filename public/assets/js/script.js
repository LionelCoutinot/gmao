/*canvas responsive 
function resize(){    
    $("#myCanvas").outerHeight($(window).height()-$("#myCanvas").offset().top- Math.abs($("#myCanvas").outerHeight(true) - $("#myCanvas").outerHeight()));
  }
  $(document).ready(function(){
    resize();
    $(window).on("resize", function(){                      
        resize();
    });
  });
  */

  const { ctx, el } = VBCanvas.createCanvas({ /* création de l'élément " Canvas " pour dessiner des éléments graphiques */ 
    // viewBox (x, y, width, height)
    viewBox: [0, 0, canvasWidth, canvasHeight],
    // where to mount the <canvas> element
    target: '.canvas-wrapper',
  });

 
 function draw() { 
    var canvas = document.getElementById('myCanvas');       
    var context = canvas.getContext('2d'); 
    var cpt=0;  
    var cpt2=0;			 
    legabs.addEventListener("click", function()  {//bouton échelle abscisse
        legendabs();
    });
    ptenv.addEventListener("click", function() {//bouton  tracé histo
        traceHist();
    });

    boutabc.addEventListener("click", function(){ //bouton  tracé histo
        courbABC();
    });
    unite.addEventListener("click", function() {//bouton texte
        unit();
    });
    
    initunit.addEventListener("click", function()  {//bouton initialisation texte
        initTexte();
    });
    initiatot.addEventListener("click", function()  {//bouton initialisation totale
        initialisation();
    });
    for (y1=50; y1<=500; y1+=50) { /* échelle des ordonnées*/
        context.beginPath();
        context.font = '9pt calibri normal';
        context.fillStyle = "black";
        context.strokeStyle = "black";
        context.moveTo(30,570);
        context.lineTo(30,(570-y1));
        context.moveTo(25,(570-y1));
        context.lineTo(35,(570-y1));
        context.stroke();
        context.closePath();
    }
    context.beginPath();
    context.moveTo(30,(570-500));
    context.lineTo(30,40);
    context.lineTo(25,50);
    context.lineTo(35,50);
    context.lineTo(30,40);
    context.stroke();
    context.closePath();
    context.fillText(10, 5, (570-50));
    context.fillText(20, 5, (570-100));
    context.fillText(30, 5, (570-150));
    context.fillText(40, 5, (570-200)); 
    context.fillText(50, 5, (570-250));
    context.fillText(60, 5, (570-300));
    context.fillText(70, 5, (570-350));
    context.fillText(80, 5, (570-400));
    context.fillText(90, 5, (570-450));
    context.fillText(100, 5, (570-500));
    for (x1=80; x1<820; x1+=80) 	{
        context.beginPath(); /* échelle des abscisses*/
        context.moveTo(30,570);
        context.lineTo((30+x1),570);
        context.moveTo((30+x1),575);
        context.lineTo((30+x1),565);
        context.stroke();
        context.closePath();
    }
    context.beginPath(); 
    context.moveTo(750,570);
    context.lineTo(880,570);
    context.lineTo(870,565);
    context.lineTo(870,575);
    context.lineTo(880,570);

    context.stroke();
    context.textAlign="center";

    context.closePath();
    context.font = '14pt calibri normal';
    context.fillStyle="black";
    context.textAlign = 'start';
  
    

    function legendabs()  { /*légende des abscisses */
        var abs1 = document.getElementById("abs1").value;
        var abs2= document.getElementById("abs2").value;
        var abs3 = document.getElementById("abs3").value;
        var abs4 = document.getElementById("abs4").value;
        var abs5 = document.getElementById("abs5").value;
        var abs6 = document.getElementById("abs6").value;
        var abs7 = document.getElementById("abs7").value;
        var abs8 = document.getElementById("abs8").value;
        var abs9 = document.getElementById("abs9").value;
        var abs10 = document.getElementById("abs10").value;

        context.clearRect(0,580, 620, 40); 
        context.font = '8pt calibri'; 
        context.fillStyle = "black";
        context.textAlign="center";
        context.fillText(abs1, 110, (590));			
        context.fillText(abs2, 190, (590));
        context.fillText(abs3, 270, (590));
        context.fillText(abs4, 350, (590)); 
        context.fillText(abs5, 430, (590));
        context.fillText(abs6, 510, (590));
        context.fillText(abs7, 590, (590));
        context.fillText(abs8, 670, (590));
        context.fillText(abs9, 750, (590));
        context.fillText(abs10, 830, (590));
           
        document.getElementById("abs1").value="";
        document.getElementById("abs2").value="";
        document.getElementById("abs3").value="";
        document.getElementById("abs4").value="";
        document.getElementById("abs5").value="";
        document.getElementById("abs6").value="";
        document.getElementById("abs7").value="";
        document.getElementById("abs8").value="";
        document.getElementById("abs9").value="";
        document.getElementById("abs10").value="";
    }


    function traceHist() { /* Tracé de l'histogramme*/
        var  pt1,pt2,pt3,pt4,pt5,pt6,pt7,pt8,pt9,pt10;
        var pt1b = document.getElementById("pt1").value;
        var pt1b = document.getElementById("pt1").value;
        var pt2b= document.getElementById("pt2").value;
        var pt3b = document.getElementById("pt3").value;
        var pt4b = document.getElementById("pt4").value;
        var pt5b = document.getElementById("pt5").value;
        var pt6b = document.getElementById("pt6").value;
        var pt7b = document.getElementById("pt7").value;
        var pt8b = document.getElementById("pt8").value;
        var pt9b = document.getElementById("pt9").value;
        var pt10b = document.getElementById("pt10").value;		

        pt1 =  parseFloat(pt1b);
        pt2 =  parseFloat(pt2b);
        pt3 =  parseFloat(pt3b);
        pt4 =  parseFloat(pt4b);
        pt5 =  parseFloat(pt5b);
        pt6 =  parseFloat(pt6b);
        pt7 =  parseFloat(pt7b);
        pt8 =  parseFloat(pt8b);
        pt9 =  parseFloat(pt9b);
        pt10 = parseFloat(pt10b);
        var coul;
        if (list.options[list.selectedIndex].value === "Noir")    {
            coul ="black";
        }
        else if (list.options[list.selectedIndex].value === "Bleu")    {
            coul ="navy";
        }
        else if (list.options[list.selectedIndex].value === "Orange")    {
            coul ="orange";
        }
        else if (list.options[list.selectedIndex].value === "Rouge")    {
            coul ="red";
        }
        else if (list.options[list.selectedIndex].value === "Vert")    {
            coul ="green";
        }
        if(confirm("Couleur : " + list.options[list.selectedIndex].value)){
            context.beginPath(); 
            context.strokeStyle = coul;
            context.strokeRect(90,(570-(pt1*5)),40,(pt1*5));
            context.strokeRect(170,(570-(pt2*5)),40,(pt2*5));
            context.strokeRect(250,(570-(pt3*5)),40,(pt3*5));
            context.strokeRect(330,(570-(pt4*5)),40,(pt4*5));
            context.strokeRect(410,(570-(pt5*5)),40,(pt5*5));
            context.strokeRect(490,(570-(pt6*5)),40,(pt6*5));
            context.strokeRect(570,(570-(pt7*5)),40,(pt7*5));
            context.strokeRect(650,(570-(pt8*5)),40,(pt8*5));
            context.strokeRect(730,(570-(pt9*5)),40,(pt9*5));
            context.strokeRect(810,(570-(pt10*5)),40,(pt10*5));
            context.closePath();
        }
    }

    function courbABC() { /* Tracé de la courbe ABC*/
        
        var pt1b = document.getElementById("pt1").value;
        var pt1b = document.getElementById("pt1").value;
        var pt2b= document.getElementById("pt2").value;
        var pt3b = document.getElementById("pt3").value;
        var pt4b = document.getElementById("pt4").value;
        var pt5b = document.getElementById("pt5").value;
        var pt6b = document.getElementById("pt6").value;
        var pt7b = document.getElementById("pt7").value;
        var pt8b = document.getElementById("pt8").value;
        var pt9b = document.getElementById("pt9").value;
        var pt10b = document.getElementById("pt10").value;	
                   
        pt1 =  parseFloat(pt1b);
        pt2 =  parseFloat(pt2b);
        pt3 =  parseFloat(pt3b);
        pt4 =  parseFloat(pt4b);
        pt5 =  parseFloat(pt5b);
        pt6 =  parseFloat(pt6b);
        pt7 =  parseFloat(pt7b);
        pt8 =  parseFloat(pt8b);
        pt9 =  parseFloat(pt9b);
        pt10 = parseFloat(pt10b);

        var coul;
        if (list.options[list.selectedIndex].value === "Noir")    {
            coul ="black";
        }
        else if (list.options[list.selectedIndex].value === "Bleu")    {
            coul ="navy";
        }
        else if (list.options[list.selectedIndex].value === "Orange")    {
            coul ="orange";
        }
        else if (list.options[list.selectedIndex].value === "Rouge")    {
            coul ="red";
        }
        else if (list.options[list.selectedIndex].value === "Vert")    {
            coul ="green";
        }
        if(confirm("Couleur : " + list.options[list.selectedIndex].value)){
            context.beginPath(); 
            context.lineWidth = 1.5;
            context.strokeStyle = coul;	
           
            context.moveTo(30,570);
            context.fillText("●",105,(570-(pt1*5)));
            context.fillText("●",190,(570-((pt1*5)+(pt2*5))));
            context.fillText("●",270,(570-((pt1*5)+(pt2*5)+(pt3*5))));
            context.fillText("●",350,(570-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5))));
            context.fillText("●",430,(570-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5))));
            context.fillText("●",510,(570-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5))));
            context.fillText("●",590,(570-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5))));
            context.fillText("●",670,(570-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5)+(pt8*5))));
            context.fillText("●",750,(570-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5)+(pt8*5)+(pt9*5))));
            context.fillText("●",830,(575-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5)+(pt8*5)+(pt9*5)+(pt10*5))));
        
            context.moveTo(30,570);
            context.lineTo(105,(568-(pt1*5)));
            context.lineTo(190,(568-((pt1*5)+(pt2*5))));
            context.lineTo(270,(568-((pt1*5)+(pt2*5)+(pt3*5))));
            context.lineTo(350,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5))));
            context.lineTo(430,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5))));
            context.lineTo(510,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5))));
            context.lineTo(590,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5))));
            context.lineTo(670,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5)+(pt8*5))));
            context.lineTo(750,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5)+(pt8*5)+(pt9*5))));
            context.lineTo(840,(568-((pt1*5)+(pt2*5)+(pt3*5)+(pt4*5)+(pt5*5)+(pt6*5)+(pt7*5)+(pt8*5)+(pt9*5)+(pt10*5))));   
            
          	
           
            context.stroke();
            context.closePath();
            context.font = '10pt calibri normal';
            context.fillStyle="black";
            context.textAlign = 'start';
            context.clearRect(800, 150, 210, 300);
            context.fillText('Pourcentage cum. (ABC) :', 780,150);
            if (isNaN(pt1)) {
                document.getElementById("pc1").innerText="";
            }
            else {
                context.fillText(((pt1).toFixed(2)), 900, 170, 200);
            }
            if (isNaN(pt2)) {
                document.getElementById("pc2").innerText="";
            }
            else {
                context.fillText(((pt1+pt2).toFixed(2)), 900, 190, 200);
            }
            if (isNaN(pt3)) {
                document.getElementById("pc3").innerText="";
            }
            else {
                context.fillText(((pt1+pt2+pt3).toFixed(2)), 900, 210, 200);
            }
            if (isNaN(pt4)) {
                document.getElementById("pc4").innerText="";
            }
            else   {
                context.fillText(((pt1+pt2+pt3+pt4).toFixed(2)), 900, 230, 200);
            }
            if (isNaN(pt5)) {
             document.getElementById("pc5").innerText="";
            }
            else  {
                context.fillText(((pt1+pt2+pt3+pt4+pt5).toFixed(2)), 900, 250, 200);
            }
            if (isNaN(pt6)) {
                document.getElementById("pc6").innerText="";
            }
            else {
                context.fillText(((pt1+pt2+pt3+pt4+pt5+pt6).toFixed(2)), 900, 270, 200);
            }
            if (isNaN(pt7)) {
                document.getElementById("pc7").innerHTML="";
            }
            else   {
                context.fillText(((pt1+pt2+pt3+pt4+pt5+pt6+pt7).toFixed(2)), 900, 290, 200);
            }
            if (isNaN(pt8)) {
                document.getElementById("pc8").innerText="";
            }
            else {
                context.fillText(((pt1+pt2+pt3+pt4+pt5+pt6+pt7+pt8).toFixed(2)), 900, 310, 200);
            }
            if (isNaN(pt9)) {
                document.getElementById("pc9").innerText="";
            }
            else{
                context.fillText(((pt1+pt2+pt3+pt4+pt5+pt6+pt7+pt8+pt9).toFixed(2)), 900, 330, 200);
            }
            if (isNaN(pt10)){
                document.getElementById("pc10").innerText="";
            }
            else   {
                context.fillText(((pt1+pt2+pt3+pt4+pt5+pt6+pt7+pt8+pt9+pt10).toFixed(2)), 900, 350, 200);
            }
        }
    }

    function unit() {// texte
        cpt++;
        var unit1 = document.getElementById("unitabs").value;
        var unit2 = document.getElementById("unitord").value;
        var intitule = document.getElementById("intitule").value;
        context.font = '9pt calibri'; 
        context.fillStyle="black";
        context.strokeStyle="black";
        context.textAlign = 'start';
        if (unit1==="" || unit2==="" || intitule==="") {
            alert("Vous n'avez rien oublié, unités ou intitulé ?");
            return cpt=0;
            return unit();
        }
        if (cpt===1) {
            context.fillText(unit1, 850, 550);
            context.fillText(unit2, 45, 50);
            context.font = '22pt calibri'; 
            context.textAlign = 'center';
            context.fillText(intitule, 500, 30, 900);
        }
        else if (cpt>1)    {
            alert("Vous avez déjà entré votre intitulé !");
        }
    }

    function initTexte() {
    // initialisation du texte
    document.getElementById("unitabs").value="";
    document.getElementById("unitord").value="";
    document.getElementById("intitule").value="";
    context.clearRect(850, 540, 200, 20);
    context.clearRect(40, 20, 200, 55);
    context.clearRect(0,0, 1000, 40);
    cpt=0;
    }

}

function initialisation()  {
    window.location.reload();

    document.getElementById("abs1").value="";
    document.getElementById("abs2").value="";
    document.getElementById("abs3").value="";
    document.getElementById("abs4").value="";
    document.getElementById("abs5").value="";
    document.getElementById("abs6").value="";
    document.getElementById("abs7").value="";
    document.getElementById("abs8").value="";
    document.getElementById("abs9").value="";
    document.getElementById("abs10").value="";
    
    document.getElementById("pt1").value="";
    document.getElementById("pt2").value="";
    document.getElementById("pt3").value="";
    document.getElementById("pt4").value="";
    document.getElementById("pt5").value="";
    document.getElementById("pt6").value="";
    document.getElementById("pt7").value="";
    document.getElementById("pt8").value="";
    document.getElementById("pt9").value="";
    document.getElementById("pt10").value="";

    document.getElementById("unitabs").value="";
    document.getElementById("unitord").value="";
    document.getElementById("intitule").value="";
    context.clearRect(560, 580, 200, 20);
    context.clearRect(35,20, 585, 25);
    context.clearRect(0,0, 620, 30);
    cpt=0;
}


function BloqSubmit(){  
    noPressEnter(document.body);
}
