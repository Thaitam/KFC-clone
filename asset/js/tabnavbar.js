const btnLeft = document.querySelector(".btn-prev");
const btnRight = document.querySelector(".btn-next");
const tabMenu = document.querySelector(".tab-menu");
const tabBtns = document.querySelectorAll(".btn-a");

const iconVisibility = () => {
    let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);
    let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;

    // console.log(scrollLeftValue);
    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
    btnRight.style.display = scrollableWidth > scrollLeftValue ? "block" : "none";
}

btnRight.addEventListener("click", () => {
    tabMenu.scrollLeft += 150;
    // iconVisibility();
    setTimeout(() => iconVisibility(), 50);
});

btnLeft.addEventListener("click", () => {
    tabMenu.scrollLeft -= 150;
    // iconVisibility();
    setTimeout(() => iconVisibility(), 50);
});

const tabNav = function(tabBtnClick) {
    tabBtns.forEach((tabBtn) => {
        tabBtn.classList.remove("active");
    });
    tabBtns[tabBtnClick].classList.add("active");
}
tabBtns.forEach((tabBtn, i) => {
    tabBtn.addEventListener("click", () => {
        tabNav(i);
    });
});

tabBtns.forEach((tabBtn, i)=> {
    tabBtn.addEventListener("click", () => {
        if (i >= 5) {
            tabMenu.scrollLeft += 150;
        } else {
            tabMenu.scrollLeft -= 150;
        }
    });
});



window.onload = function() {
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? "" : "none";
}

window.onresize = function() {
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? "" : "none";
    
    let scrollLeftValue = Math.round(tabMenu.scrollLeft);
    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
};