let body = document.getElementsByTagName("body")[0];
document.querySelectorAll('div.file > img').forEach(e => hover(e));
function hover(original) {
  original.onmouseover = (e) => {
    let copy = document.createElement("img");
    copy.id = "copy";
    copy.src = original.src
    body.appendChild(copy);
    
    document.onmousemove = (e) => {
      copy.style.left = e.pageX + 50 + "px";
      copy.style.top = e.pageY - copy.offsetHeight / 2 + "px";
      
      if (copy.offsetHeight > window.innerHeight) {
        copy.style.height = window.innerHeight + "px";
        console.log(window.innerWidth)
      }
    }
     
  };
  original.onmouseleave = () => {
    body.removeChild(copy);
  };
}