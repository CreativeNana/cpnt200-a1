<!-- Show current page as active in navigation menu -->

  let cUrl = window.location.href.toLowerCase().split("?");
  let cPage = cUrl[0];
  let IsHome = cPage.split("/").splice(-1);
  
  const menuList = document.querySelectorAll('.menu>li>a');
  
  menuList.forEach(function(menuItem) {
    const aHerf = menuItem.href.toLowerCase().split("/").splice(-1);

    if (cPage.indexOf(aHerf) > 0 || (IsHome.toString().length == 0 && aHerf.toString().length == 0)) {
        menuItem.className += ' active';
    }
    else{
      menuItem.className = menuItem.className.replace('active', '');
    }

  });
