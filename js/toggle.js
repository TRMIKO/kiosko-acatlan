(function(){
  var button = document.getElementById("agregar"),
      save =document.getElementById("modal-save"),
      close=document.getElementById("close");
  var toggle = function(){
    save.setAttribute("class","is-active");
  };
  var toggleclose=function(){
    save.className="modal";
    console.log("hola");
  };

  button.addEventListener("click",toggle);
  close.addEventListener("click",toggleclose);


})();
