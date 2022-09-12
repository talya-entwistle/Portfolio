const hamburger_icon = document.querySelector(".hamburger-icon");
const hamburger_overlay = document.querySelector(".hamburger-overlay");
const hamburger_section = document.querySelector(".hamburger-section");
const intro_container = document.querySelector(".intro-container");

const hamburger_home = document.querySelector(".hamburger-home");
const hamburger_portfolio = document.querySelector(".hamburger-portfolio");
const hamburger_about = document.querySelector(".hamburger-about");
const hamburger_contact = document.querySelector(".hamburger-contact");

hamburger_icon.addEventListener("click", function () {
	hamburger_icon.classList.toggle("is-active");
	hamburger_overlay.classList.toggle("is-open");
	hamburger_section.classList.toggle("is-active");
	intro_container.classList.toggle("is-open");
});


hamburger_home.addEventListener("click", function () {
	hamburger_icon.classList.remove("is-active");
	hamburger_overlay.classList.remove("is-open");
	intro_container.classList.toggle("is-open");
 });

hamburger_portfolio.addEventListener("click", function () {
	hamburger_icon.classList.remove("is-active");
	hamburger_overlay.classList.remove("is-open");
	intro_container.classList.toggle("is-open");
 });

hamburger_about.addEventListener("click", function () {
	hamburger_icon.classList.remove("is-active");
	hamburger_overlay.classList.remove("is-open");
	intro_container.classList.toggle("is-open");
});

hamburger_contact.addEventListener("click", function () {
	hamburger_icon.classList.remove("is-active");
	hamburger_overlay.classList.remove("is-open");
	intro_container.classList.toggle("is-open");
});
