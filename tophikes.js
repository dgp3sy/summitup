/*Cathy Chang, Danny Perkins
cc5ar, dgp3sy*/

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 20) {
    document.getElementById("btn").style.display = "block";
  } else {
    document.getElementById("btn").style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}


document.addEventListener('DOMContentLoaded', init, false);
function init(){
  function incrementRag () {
    var rcount = document.getElementById("rag-count");
    var intRCount = parseInt(rcount.textContent);
    var inc = integer => integer + 1
    rcount.textContent = inc(intRCount);
    document.getElementById("rag-button").disabled = true;

  }

  function incrementCrab () {
    var ccount = document.getElementById("crab-count");
    var inc = function(integer) {return integer + 1;}
    var intcCount = parseInt(ccount.textContent);
    ccount.textContent = inc(intcCount);
    document.getElementById("crab-button").disabled = true;

  }

  function incrementKnob () {
    var kcount = document.getElementById("knob-count");
    var newkCount = parseInt(kcount.textContent) + 1;
    kcount.textContent = newkCount;
    document.getElementById("knob-button").disabled = true;

  }
  var rbutton = document.getElementById('rag-button');
  rbutton.addEventListener('click', incrementRag, true);
  var cbutton = document.getElementById('crab-button');
  cbutton.addEventListener('click', incrementCrab, true);
  var kbutton = document.getElementById('knob-button');
  kbutton.addEventListener('click', incrementKnob, true);
};