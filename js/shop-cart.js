$(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
$(".tab ul.tabs li a").on("click", function (g) {
  var tab = $(this).closest(".tab"),
    index = $(this).closest("li").index();
  tab.find("ul.tabs > li").removeClass("current");
  $(this).closest("li").addClass("current");
  tab
    .find(".tab_content")
    .find("div.tabs_item")
    .not("div.tabs_item:eq(" + index + ")")
    .slideUp();
  tab
    .find(".tab_content")
    .find("div.tabs_item:eq(" + index + ")")
    .slideDown();
  g.preventDefault();
});

const orderBtns = document.querySelectorAll(".btn-card");
console.log(orderBtn);
const input = document.getElementById("article");

function order() {
  input.value = this.dataset.item;
}

orderBtns.forEach((orderBtn) => {
  orderBtn.addEventListener("click", order);
});
