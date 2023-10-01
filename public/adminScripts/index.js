//MenuToggle
let toggle = document.querySelectorAll(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.forEach((toggles) => {
  toggles.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
  };
});

//add hovered class in selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => item.classList.remove("hovered"));
  this.classList.add("hovered");
}
list.forEach((item) => item.addEventListener("click", activeLink));

const dashboardBtn = document.querySelector("#dashboardBtn");
const customerBtn = document.querySelector("#customersBtn");
const inventoryBtn = document.querySelector("#messageBtn");
const productsBtn = document.querySelector("#productsBtn");
const newProductsBtn = document.querySelector("#newProductsBtn");
const passwordBtn = document.querySelector("#passwordBtn");
const signOutBtn = document.querySelector("#signOutBtn");

const dashboardContent = document.querySelector("#dashboard");
const productContent = document.querySelector("#products");
const newproductContent = document.querySelector("#newProducts");
const inventoryContent = document.querySelector("#inventory");
const newInventoryContent = document.querySelector("#newInventory");

productContent.style.display = "none";
newproductContent.style.display = "none";
inventoryContent.style.display = "none";
newInventoryContent.style.display = "none";

dashboardBtn.addEventListener("click", () => {
  dashboardContent.style.display = "unset";
  productContent.style.display = "none";
  newproductContent.style.display = "none";
  inventoryContent.style.display = "none";
  newInventoryContent.style.display = "none";
});

inventoryBtn.addEventListener("click", () => {
  dashboardContent.style.display = "none";
  productContent.style.display = "none";
  newproductContent.style.display = "none";
  inventoryContent.style.display = "unset";
  newInventoryContent.style.display = "none";
});

customerBtn.addEventListener("click", () => {
  dashboardContent.style.display = "none";
  productContent.style.display = "none";
  newproductContent.style.display = "none";
  inventoryContent.style.display = "none";
  newInventoryContent.style.display = "unset";
});

newProductsBtn.addEventListener("click", () => {
  dashboardContent.style.display = "none";
  productContent.style.display = "none";
  newproductContent.style.display = "unset";
  inventoryContent.style.display = "none";
  newInventoryContent.style.display = "none";
});

productsBtn.addEventListener("click", () => {
  dashboardContent.style.display = "none";
  productContent.style.display = "unset";
  newproductContent.style.display = "none";
  inventoryContent.style.display = "none";
  newInventoryContent.style.display = "none";
});

passwordBtn.addEventListener("click", () => {
  dashboardContent.style.display = "none";
  productContent.style.display = "none";
  newproductContent.style.display = "none";
  inventoryContent.style.display = "none";
});

signOutBtn.addEventListener("click", () => {
  dashboardContent.style.display = "none";
  productContent.style.display = "none";
  newproductContent.style.display = "none";
  inventoryContent.style.display = "none";
  newInventoryContent.style.display = "none";
});
