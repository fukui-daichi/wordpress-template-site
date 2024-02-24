window.addEventListener('DOMContentLoaded', () => {
  gsap.config({
    force3D: false,
  });

  // トップページスライダー
  (() => {
    const splide = new Splide('.splide', {
      rewind: true,
      type: 'fade',
      autoplay: true,
      interval: 5000,
      speed: 4000,
      arrows: false,
      pagination: false,
    });
    if(!splide) return;

    splide.on('mounted move', () => {
      // 現在のスライド番号（index は 0 から始まるため +1 する）
      const currentSlideNumber = (splide.index + 1).toString().padStart(2, '0');
      // 全スライド数
      const totalSlides = splide.length.toString().padStart(2, '0');
      // HTML の要素を更新
      document.querySelector('.current-slide').textContent = currentSlideNumber;
      document.querySelector('.total-slides').textContent = totalSlides;
    });

    splide.mount();
  })();

  (() => {
    const slideCaptions = document.querySelectorAll('.js-slide-caption');

    slideCaptions.forEach((slideCaption) => {
      const clone = slideCaption.cloneNode(true);
      slideCaption.parentNode.insertBefore(clone, slideCaption.nextSibling);

      let isAnimating = false;

      const startAnimation = () => {
        if (isAnimating) return;
        isAnimating = true;

        gsap.to([slideCaption, clone], {
          y: '-100%', duration: 1,
          onComplete: () => {
            gsap.to([slideCaption, clone], {
              y: '0%', duration: 0, onComplete: () => {
                isAnimating = false;
              }
            });
          }
        });
      };

      slideCaption.addEventListener('mouseenter', startAnimation);
    });
  })();




});