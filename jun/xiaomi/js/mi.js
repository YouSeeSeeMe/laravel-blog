$(function () {
    $('.menu1').hover(function () {
        $('.slide').find('span').css('display','none')
    },function () {
        $('.slide').find('span').css('display','block')
    });
    $('.slide').find('span').hover(function () {
        $(this).addClass("active");
    },function () {
        $(this).removeClass("active");
    });
});
window.onload=function () {
      var slideIcon=document.querySelector('.slide_icon');
      var slideIconLi=slideIcon.querySelectorAll('li');
      var slideImg=document.querySelector('.slide_img');
      var slideImgLi=slideImg.querySelectorAll('li');
      var slide=document.querySelector(".slide");
      var toNext=slide.querySelector('.toNext');
      var toPrevious=slide.querySelector('.toPrevious');
      var slideNum=0;
      var slideTimer=null;

      slideTimer=setInterval(toRun,4000);

      for (var i=0;i<slideIconLi.length;i++){
          slideIconLi[i].index=i;
          slideIconLi[i].onclick=function () {
              slideNum=this.index;
              for (var i=0;i<slideIconLi.length;i++) {
                  slideIconLi[i].className='';
                  bufferMove(slideImgLi[i],{
                      opacity:0//淡出
                  },function(){
                      this.style.display='none';
                  })
              }
              this.className='active';
              slideImgLi[this.index].style.display='block';
              bufferMove(slideImgLi[this.index],{
                  opacity:100//淡入
              })
          }
      };

      toNext.onclick=function(){
          slideNum++;
          slideImgChange()
          clearInterval(slideTimer);
      };
      toPrevious.onclick=function(){
          clearInterval(slideTimer);
          slideNum--;
          if (slideNum==-1) {
              slideNum=slideIconLi.length-1;
          }
          slideImgChange()
      };
      //绑定事件利用冒泡捕获
      slide.addEventListener('mouseover',function () {
          clearInterval(slideTimer)
      });
      slide.addEventListener('mouseout',function () {
          slideTimer=setInterval(toRun,4000);
      });


      function toRun() {
          slideNum++;
          slideImgChange()
      }
      function slideImgChange() {
          if(slideNum==slideIconLi.length){
              slideNum=0;
          }
          for (var i=0;i<slideIconLi.length;i++) {
              slideIconLi[i].className='';
              bufferMove(slideImgLi[i],{
                  opacity:0
              },function(){
                  this.style.display='none';
              })
          };
          slideIconLi[slideNum].className='active';
          slideImgLi[slideNum].style.display='block';
          bufferMove(slideImgLi[slideNum],{
              opacity:100
          });
      }
};
