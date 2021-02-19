const setActive = () => {
  document.querySelectorAll(".nav-item > a.nav-link").forEach(function(item) {
    if(item.href === location.href){
      item.classList.add( "active" );
    }
    else{
      item.classList.remove( "active" );
    }
  });
}
setActive()