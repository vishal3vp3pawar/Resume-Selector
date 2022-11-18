
console.log('Annapoorani')

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


document.addEventListener("DOMContentLoaded", function(){
      var el = document.querySelector(".button-bird");
      var text = document.querySelector(".button-bird__text");
          el.addEventListener('click', function() {
            el.classList.toggle('active');

            if(el.classList.contains('active')){
            	console.log('true');
            	text.innerHTML = 'DONE';
            }else{
            	text.innerHTML = 'SUBMIT';
            }
        });
    });


function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("recruiter-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}




function choice(){

var accept_button = document.getElementsByClassName("accept");
var reject_button = document.getElementsByClassName("reject");
  
  for(i=0;i<accept_button.length;i++){
      accept_button[i].addEventListener("click",function(){  
          console.log('accept');
          this.style.display='none';
          this.previousElementSibling.innerHTML="Accepted"
          this.nextElementSibling.style.display='none';
  

      });

      reject_button[i].addEventListener("click",function(){
        console.log('reject');
        this.style.display='none';
          this.previousElementSibling.style.display="none";
          this.nextElementSibling.innerHTML='Rejected';
      });
    
    }
}

choice();


function show_file(){
  var sh_f=document.getElementsByClassName("show_file");
  if(document.getElementById("applicant_option").checked === true){
      sh_f[0].style.display='block';
  }
  if(document.getElementById("recruiter_option").checked === true){
      sh_f[0].style.display='none';
  }


}



/*
////////////////////slideshow///////////////////////////

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  
 
}

////////////COLLAPSABLE BUTTON///////////
//for job description in apply section//
var coll = document.getElementsByClassName("collapsible");
var i;
var jc=document.getElementsByClassName("job-content");

coll[0].addEventListener('click',function(){
  console.log('hola');
})


for (i = 0; i < coll.length; i++) {
  console.log(i+'i');

  coll[i].addEventListener("click", function() {

      console.log("hiii"+i);
    //jc[i].style.display='none';

    console.log(this.previousElementSibling.style.display);

    if(this.previousElementSibling.style.display==='' ||this.previousElementSibling.style.display==='block'){
    this.previousElementSibling.style.display='none';
    }
    else if(this.previousElementSibling.style.display=== "none" ){
    this.previousElementSibling.style.display='block';
    }

    this.classList.toggle("active");
    

    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = 157 + "px";
    } 
  });

}


function hello(){
  console.log('Hello');
}

*/

//Recuiter part
