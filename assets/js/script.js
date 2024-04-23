window.addEventListener('DOMContentLoaded', () => {
  // SPの判定
  const isMobile = window.matchMedia("(max-width: 750px)").matches;

  // gsapの初期設定
  gsap.config({
    force3D: false,
  });
});