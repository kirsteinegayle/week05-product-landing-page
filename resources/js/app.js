import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const revealEls = document.querySelectorAll(".reveal");
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: "0px 0px -8% 0px" });
    revealEls.forEach((el) => io.observe(el));

    const heroPhoto = document.getElementById("heroPhoto");
    if (heroPhoto) {
        let ticking = false;
        window.addEventListener("scroll", () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const y = window.scrollY;
                    if (y < window.innerHeight) {
                        heroPhoto.style.transform = `translateY(${y * 0.22}px) scale(${1 + y * 0.0002})`;
                    }
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
});
