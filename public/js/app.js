function copyClipboard() {
    let copyText = document.getElementById("discord");

    copyText.select();

    navigator.clipboard.writeText(copyText.value);

    Swal.fire("Copied Text to Clipboard: " + copyText.value);
}

function realTime() {
    const BLOCKTIME = document.getElementById("block-time");
    setInterval(() => {
        const p = document.getElementById("time");
        let time = new Date().toLocaleTimeString();
        p.textContent = time;
        BLOCKTIME.innerHTML = "";
        BLOCKTIME.append(p);
    }, 1000);
}

function language() {
    const toggle = document.getElementById("toggle");
    const id = document.getElementById("id");
    const en = document.getElementById("en");

    toggle.onclick = function () {
        let active = toggle.classList.toggle("active");
        if (active) {
            en.classList.remove("bg-tertiary");
            id.classList.add("bg-tertiary");
        } else {
            id.classList.remove("bg-tertiary");
            en.classList.add("bg-tertiary");
        }
    };
}

function loader() {
    let main_content = document.getElementById("main_content");
    let loader = document.getElementById("preloader");

    window.addEventListener("load", function () {
        loader.style.display = "none";
        main_content.classList.remove("hidden");
    });
}

loader();

const hiddenUps = document.querySelectorAll(".hiddenUp");
const hiddenDowns = document.querySelectorAll(".hiddenDown");
const hiddenLeft = document.querySelectorAll(".hiddenLeft");
const hiddenRight = document.querySelectorAll(".hiddenRight");

const observerY = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("showY");
        } else {
            entry.target.classList.remove("showY");
        }
    });
});

hiddenUps.forEach((el) => observerY.observe(el));
hiddenDowns.forEach((el) => observerY.observe(el));

const observerX = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("showX");
        } else {
            entry.target.classList.remove("showX");
        }
    });
});

hiddenLeft.forEach((el) => observerX.observe(el));
hiddenRight.forEach((el) => observerX.observe(el));
