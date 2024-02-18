const ImageFileConverter = require("@kyohei-dan/webp-converter-package");

(async () => {
  new ImageFileConverter([
    {
      dirPath: "../assets/images",
      format: [".jpg", ".jpeg", ".png"],
      quality: 80,
    },
  ]);
})();
