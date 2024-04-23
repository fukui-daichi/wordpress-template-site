window.addEventListener('DOMContentLoaded', () => {
  // SPの判定
  const isMobile = window.matchMedia("(max-width: 750px)").matches;

  // gsapの初期設定
  gsap.config({
    force3D: false,
  });

  // ドロワーの開閉処理
  (() => {
    const drawerToggleButton = document.querySelector('button');
    const header = document.querySelector('.site-header');
    let isOpen = false; // ドロワーが開いているかどうかを追跡するフラグ
    let isAnimating = false; // アニメーション中かどうかを追跡するフラグ

    drawerToggleButton.addEventListener('click', () => {
      // アニメーション中は何もしない
      if (isAnimating) return;

      isAnimating = true; // アニメーション開始をフラグで管理

      if (isOpen) {
        // ドロワーを閉じる
        gsap.to(header, {
          top: "-100svh",
          duration: 0.5,
          onComplete: () => {
            isAnimating = false;
            header.style.top = "100svh";
          }
        });
      } else {
        // ドロワーを開く
        gsap.to(header, {
          top: "0svh",
          duration: 0.5,
          onComplete: () => {
            isAnimating = false;
          }
        });
      }
      isOpen = !isOpen; // フラグを反転
    });
  })();

});