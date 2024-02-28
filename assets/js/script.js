window.addEventListener('DOMContentLoaded', () => {

  // gsapの初期設定
  gsap.config({
    force3D: false,
  });

  // スライダーに関する設定
  (() => {
    const splide = new Splide('.splide', {
      rewind: true,
      type: 'fade',
      autoplay: true,
      interval: 6000,
      speed: 2500,
      arrows: false,
      pagination: false,
      pauseOnHover: false,
      pauseOnFocus: false,
    });
    if (!splide) return;

    const slideProgressBars = document.querySelectorAll('.slide-progress');

    // Function to update progress bars based on the current slide
    const updateProgressBars = (progress) => {
      slideProgressBars.forEach((progressBar) => {
        progressBar.value = progress;
      });
    };

    splide.on('mounted move', () => {
      const currentSlideNumber = splide.index;
      const totalSlides = splide.length;
      document.querySelector('.current-slide').textContent = (currentSlideNumber + 1).toString().padStart(2, '0');
      document.querySelector('.total-slides').textContent = totalSlides.toString().padStart(2, '0');

      const progress = (currentSlideNumber / (totalSlides - 1)) * 1000;
      updateProgressBars(progress);
    });

    // Sync progress bar interaction with Splide
    slideProgressBars.forEach((progressBar) => {
      progressBar.addEventListener('input', () => {
        // Pause autoplay when user is interacting with the progress bar
        if (splide.Components.Autoplay) {
          splide.Components.Autoplay.pause();
        }

        // Calculate the progress based on the progress bar value
        const progress = progressBar.value / 1000;
        splide.Components.Controller.go(Math.round(progress * (splide.length - 1)));
      });
    });

    // Listen for autoplay progress to update progress bars
    splide.on('autoplay:playing', (progress) => {
      // Map progress range from 0-1 to 0-1000
      updateProgressBars(progress * 1000);
    });

    splide.mount();

    // bodyにis-drawer-openクラスが付与された時はスライドを停止する
    const observer = new MutationObserver((mutations) => {
      mutations.forEach((mutation) => {
        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
          handleClassAttributeChange();
        }
      });
    });

    function handleClassAttributeChange() {
      const bodyHasClass = document.body.classList.contains('is-drawer-open');
      const slideAnimationEles = document.querySelectorAll('.image-inner');
      toggleSliderAndAnimations(bodyHasClass, slideAnimationEles);
    }

    function toggleSliderAndAnimations(isPaused, elements) {
      const action = isPaused ? 'pause' : 'play';
      const animationPlayState = isPaused ? 'paused' : 'running';

      if (splide.Components.Autoplay) {
        splide.Components.Autoplay[action]();
      }

      elements.forEach((element) => {
        element.style.animationPlayState = animationPlayState;
      });
    }

    observer.observe(document.body, {
      attributes: true,
      attributeFilter: ['class']
    });
  })();

  // スライダーの斜め線
  (() => {
    const adjustLineAngleAndLength = () => {
      // 全ての.rectangle要素を取得
      const rectangles = document.querySelectorAll('.rectangle');

      // 各.rectangle要素に対して処理を実行
      rectangles.forEach(rectangle => {
        const parent = rectangle.parentElement;

        // 長方形の幅と高さを取得
        const width = parent.offsetWidth;
        const height = parent.offsetHeight;

        // 斜線の角度を計算（アークタンジェントを使用）
        const angleRad = Math.atan2(height, width);
        const angleDeg = angleRad * (180 / Math.PI);

        // 対角線の長さを計算（ピタゴラスの定理）
        const diagonalLength = Math.sqrt(width * width + height * height);

        // line要素のtransformプロパティを更新（角度）
        rectangle.style.transform = `rotate(${-angleDeg}deg)`;

        // line要素のwidthプロパティを更新（長さ）
        rectangle.style.width = `${diagonalLength}px`;
      });
    }

    // 初期調整
    adjustLineAngleAndLength();

    // ウィンドウのリサイズ時に調整を再適用
    window.addEventListener('resize', adjustLineAngleAndLength);
  })();

  // テキストの回転アニメーション
  (() => {
    const slideCaptions = document.querySelectorAll('.js-slide-caption');
    if (!slideCaptions.length) return;

    slideCaptions.forEach((slideCaption) => {
      const clone = slideCaption.cloneNode(true);
      slideCaption.parentNode.insertBefore(clone, slideCaption.nextSibling);

      let isAnimating = false;

      const startAnimation = (i) => {
        if (isAnimating) return;
        isAnimating = true;

        gsap.to([slideCaption, clone], {
          y: '-100%',
          duration: 0.8,
          ease: "power2.out",
          onComplete: () => {
            gsap.to([slideCaption, clone], {
              y: '0%',
              duration: 0,
              onComplete: () => {
                isAnimating = false;
              }
            });
          }
        });
      };
      document.querySelector('.caption-inner').addEventListener('mouseenter', startAnimation);
    });
  })();

  // ドロワーメニュー
  (() => {
    const drawerButton = document.querySelector('.drawer-button');
    if(!drawerButton) return;

    drawerButton.addEventListener('click', () => {
      document.body.classList.toggle('is-drawer-open');
    });
  })();
});