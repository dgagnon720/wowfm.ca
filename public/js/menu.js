

document.getElementById('MENUprog').onclick = function(){
  document.getElementById("MENUaccu").classList.remove("active");
  document.getElementById("MENUanim").classList.remove("active");
  document.getElementById("MENUconc").classList.remove("active");
  document.getElementById("MENUecri").classList.remove("active");
  document.getElementById('MENUprog').classList.add("active");
}

document.getElementById('MENUaccu').onclick = function(){
  document.getElementById("MENUprog").classList.remove("active");
  document.getElementById("MENUanim").classList.remove("active");
  document.getElementById("MENUconc").classList.remove("active");
  document.getElementById("MENUecri").classList.remove("active");
  document.getElementById('MENUaccu').classList.add("active");
}

document.getElementById('MENUanim').onclick = function(){
  document.getElementById("MENUaccu").classList.remove("active");
  document.getElementById("MENUprog").classList.remove("active");
  document.getElementById("MENUconc").classList.remove("active");
  document.getElementById("MENUecri").classList.remove("active");
  document.getElementById('MENUanim').classList.add("active");
}

document.getElementById('MENUconc').onclick = function(){
  document.getElementById("MENUaccu").classList.remove("active");
  document.getElementById("MENUanim").classList.remove("active");
  document.getElementById("MENUprog").classList.remove("active");
  document.getElementById("MENUecri").classList.remove("active");
  document.getElementById('MENUconc').classList.add("active");
}

document.getElementById('MENUecri').onclick = function(){
  document.getElementById("MENUaccu").classList.remove("active");
  document.getElementById("MENUanim").classList.remove("active");
  document.getElementById("MENUconc").classList.remove("active");
  document.getElementById("MENUprog").classList.remove("active");
  document.getElementById('MENUecri').classList.add("active");
}



document.getElementById('form-submit').onclick = function(){
  document.getElementById('hideEcrivezNous').classList.add("hideEcrivezNous");
}
