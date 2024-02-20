window.addEventListener('DOMContentLoaded', () => {
  // トップページスライダー
  (() => {
    const splide = new Splide('.splide', {
      rewind: true,
      type: 'fade',
      autoplay: true,
      interval: 5000,
      speed: 4000,
      arrows: true,
      pagination: true,
    });
    if(!splide) return;
    splide.mount();
  })();
});