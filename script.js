let cats = document.getElementsByClassName("cat");
let subMenus = document.getElementsByClassName("sub_menu");

cats = Array.from(cats);
subMenus = Array.from(subMenus);

cats.forEach((cat) => {
  cat.addEventListener("click", () => {
    const catId = cat.getAttribute("id");

    subMenus.forEach((subMenu) => {
      if (subMenu.getAttribute("id") === `sub_menu${catId}`) {
        subMenu.classList.toggle("hidden");
      } else {
        subMenu.classList.add("hidden");
      }
    });
  });
});
