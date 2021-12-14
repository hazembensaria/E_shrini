
// bout=document.getElementBy("b1") ;
var res = document.getElementsByClassName("categori");
for(i=0;i<res.length;i++)
     res[i].addEventListener('click',switche);
// console.log(bout);
function switche() {
    
    this.style.color="blue"
  }

  var popup = document.getElementById("myPopup");
  function myFunction() {
    
    popup.classList.toggle("show");
  }

