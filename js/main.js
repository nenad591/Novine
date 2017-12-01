//JS SCRIPT is going here

function ajax(e){
  xml = new XMLHttpRequest();
  xml.open('GET', 'index.php?s='+e);
  /*xml.onreadystatechange = function(){
    if(this.readyState == 4){
      document.getElementById('demo') = this.response;
    }
  }*/
  xml.send();
}
