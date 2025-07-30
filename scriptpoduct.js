//--------------------------product-----------------------------//
//Hiệu ứng chuyển đọng ảnh
const bigimg = document.querySelector(".product-content-left-big-img img");
const smallimg = document.querySelectorAll(
  ".product-content-left-small-img img"
);
smallimg.forEach(function (imgItem, X) {
  imgItem.addEventListener("click", function () {
    bigimg.src = imgItem.src;
  });
});

//nhấn vào bảo quản sẽ hiện ra thông tin bảo quản chi tiết sẽ none
const baoquan = document.querySelector(".baoquan");
const chitiet = document.querySelector(".chitiet");
if (baoquan) {
  baoquan.addEventListener("click", function () {
    document.querySelector(
      ".product-content-right-bottom-content-chitiet"
    ).style.display = "none";
    document.querySelector(
      ".product-content-right-bottom-content-baoquan"
    ).style.display = "block";
  });
}
// khi nhấn vào chi tiết bảo quản sẽ none
//qua css
//.product-content-right-bottom-content-baoquan {
// display: none;
//}
if (chitiet) {
  chitiet.addEventListener("click", function () {
    document.querySelector(
      ".product-content-right-bottom-content-chitiet"
    ).style.display = "block";
    document.querySelector(
      ".product-content-right-bottom-content-baoquan"
    ).style.display = "none";
  });
}
//chỗ muỗi tên khi nhấn vào sẽ sổ xuống bảo quản chi tiết
//activeb bên css dòng 429
const butTon = document.querySelector(".product-content-right-bottom-top");
if (butTon) {
  butTon.addEventListener("click", function () {
    document
      .querySelector(".product-content-right-bottom-content-big")
      .classList.toggle("activeB");
  });
}
