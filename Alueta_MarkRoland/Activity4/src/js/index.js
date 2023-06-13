"use strict";
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
var themeToggleBtn = document.getElementById("theme-toggle");
if (localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    themeToggleLightIcon === null || themeToggleLightIcon === void 0 ? void 0 : themeToggleLightIcon.classList.remove("hidden");
}
else {
    themeToggleDarkIcon === null || themeToggleDarkIcon === void 0 ? void 0 : themeToggleDarkIcon.classList.remove("hidden");
}
themeToggleBtn === null || themeToggleBtn === void 0 ? void 0 : themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon === null || themeToggleDarkIcon === void 0 ? void 0 : themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon === null || themeToggleLightIcon === void 0 ? void 0 : themeToggleLightIcon.classList.toggle("hidden");
    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
        else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
        // if NOT set via local storage previously
    }
    else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
        else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});
