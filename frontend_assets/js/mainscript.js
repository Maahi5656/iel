

  const galleryItems = document.querySelector(".image-gallery-items").children;

  //console.log(galleryItems);
  const prev = document.querySelector(".prev");
  const next = document.querySelector('.next');
  const page = document.querySelector('.page-num');

  const maxItem=4;
  let index=1;

  const pagination = Math.ceil(galleryItems.length/maxItem);

  prev.addEventListener("click", function(){
      index--;
      check();
      showItems();
  });
  next.addEventListener("click", function(){
      index++;
      check();
      showItems();
  });

  function check(){
      if(index == pagination){
          next.classList.add("disabled");
      }else{
          next.classList.remove("disabled");
      }

      if(index==1){
          prev.classList.add("disabled");
      }else{
          prev.classList.remove("disabled");
      }

  }

  function showItems(){
      for(let i=0;i<galleryItems.length; i++){
        galleryItems[i].classList.remove("show");
        galleryItems[i].classList.add("hide");


        if(i>=(index*maxItem)-maxItem && i<index*maxItem){
          galleryItems[i].classList.remove("hide");
          galleryItems[i].classList.add("show");
        }
      page.innerHTML = index;
    }
  }

  window.onload = function(){
      showItems();
      check();
  }
