// Hamburger
function hamburger() {
	const hamburgerBtn = document.querySelectorAll(".js-hamburger");
	const html = document.getElementsByTagName("html")[0];
	const main = document.querySelector(".main");
	const footer = document.querySelector(".footer");

	hamburgerBtn.forEach(btn => {
		btn.addEventListener("click", function(evBtn) {
			const isExpanded = btn.getAttribute("aria-expanded") === "true";
			btn.setAttribute("aria-expanded", !isExpanded);

			html.classList.toggle("nav-open");

			if (!isExpanded) {
				main.setAttribute("inert", "");
				footer.setAttribute("inert", "");
			} else {
				setTimeout(function(){
					main.removeAttribute("inert", "");
					footer.removeAttribute("inert", "");
				},500);
			}

			setTimeout(function(){
				html.classList.toggle("nav-animated");
			}, 100);
		});
	});
}

hamburger();
