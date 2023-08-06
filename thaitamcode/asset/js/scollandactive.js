// let sections = document.querySelectorAll('.sectionscroll');
// let navLinks = document.querySelectorAll('.btn-a');
// let tab = document.querySelector(".tab-menu");

// let current = 'home';
// window.addEventListener('scroll', () => {
//     sections.forEach(section => {
//         if (window.scrollY >= (section.offsetTop - 190)) {
//             current = section.id;
//         }
//     });

//     navLinks.forEach((navLink,index) => {
//         if (navLink.href.includes(current)) {
//             document.querySelector('.active').classList.remove('active');
//             navLink.classList.add('active');
//             if (index >= 4 ) {
//                 setTimeout(() => {
//                     tabMenu.scrollLeft += 250;
//                 }, 5);
//             } else {
//                 setTimeout(() => {
//                     tabMenu.scrollLeft -= 250;
//                 }, 5);
//             }
//         }
//     })
//     setTimeout(() => iconVisibility(), 50);
// });

// let sections = document.querySelectorAll('.sectionscroll');
// let navLinks = document.querySelectorAll('.btn-a');
// let tabMenu = document.querySelector(".tab-menu");

// let current = 'home';
// window.addEventListener('scroll', () => {
//     sections.forEach(section => {
//         if (window.scrollY >= (section.offsetTop - 190)) {
//             current = section.id;
//         }
//     });

//     navLinks.forEach((navLink, index) => {
//         if (navLink.href.includes(current)) {
//             document.querySelector('.active').classList.remove('active');
//             navLink.classList.add('active');
//             if (index >= 4) {
//                 setTimeout(() => {
//                     tabMenu.scrollLeft += 250;
//                 }, 5);
//             } else {
//                 setTimeout(() => {
//                     tabMenu.scrollLeft -= 250;
//                 }, 5);
//             }
//         }
//     });

//     // Thêm id của section vào URL
//     let url = window.location.href.split('#')[0];
//     let newUrl = `${url}#${current}`;
//     history.pushState({}, '', newUrl);

//     setTimeout(() => iconVisibility(), 50);
// });

let sections = document.querySelectorAll('.sectionscroll');
let navLinks = document.querySelectorAll('.btn-a');
let tabMenu = document.querySelector(".tab-menu");

let current = 'home';
window.addEventListener('scroll', () => {
    sections.forEach(section => {
        if (window.scrollY >= (section.offsetTop - 190)) {
            current = section.id;
        }
    });

    navLinks.forEach((navLink, index) => {
        if (navLink.href.includes(current)) {
            document.querySelector('.active').classList.remove('active');
            navLink.classList.add('active');

            // Thêm id của phần tử a vào URL khi được active
            const url = new URL(navLink.href);
            url.hash = current;
            history.pushState(null, null, url.toString());

            if (index >= 4) {
                setTimeout(() => {
                    tabMenu.scrollLeft += 250;
                }, 5);
            } else {
                setTimeout(() => {
                    tabMenu.scrollLeft -= 250;
                }, 5);
            }
        }
    });
    setTimeout(() => iconVisibility(), 50);
});

