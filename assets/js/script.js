// assets/js/script.js - simplified but functionally identical
document.addEventListener("DOMContentLoaded", () => {
  try {
    // year
    const yearEl = document.getElementById("year");
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    // mobile menu
    const menuBtn = document.getElementById("menuBtn");
    const nav = document.getElementById("nav");
    if (menuBtn && nav) {
      menuBtn.addEventListener("click", () => nav.classList.toggle("open"));
      nav.querySelectorAll("a").forEach(a => a.addEventListener("click", () => nav.classList.remove("open")));
    }

    // smooth scroll for hash links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener("click", function (e) {
        const target = document.querySelector(this.getAttribute("href"));
        if (target) { e.preventDefault(); target.scrollIntoView({ behavior: "smooth" }); }
      });
    });

    // contact form submit UI
    const form = document.querySelector(".contact-form-new");
    if (form) form.addEventListener("submit", () => {
      const btn = form.querySelector("button[type='submit']");
      if (btn) { btn.disabled = true; btn.textContent = "Sending..."; }
    });

    // scroll to contact if ?sent present
    if (new URLSearchParams(location.search).has("sent")) {
      const contactSection = document.querySelector("#contact");
      if (contactSection) contactSection.scrollIntoView({ behavior: "smooth" });
    }

    // fade-in via IntersectionObserver with fallback
    const nodes = document.querySelectorAll(".section, .project-card, .skill-chip");
    if (nodes.length === 0) {
      document.querySelectorAll(".section").forEach(s => s.classList.add("fade-in"));
    } else if ("IntersectionObserver" in window) {
      const obs = new IntersectionObserver((entries, o) => {
        entries.forEach(en => { if (en.isIntersecting) { en.target.classList.add("fade-in"); o.unobserve(en.target); } });
      }, { threshold: 0.12 });
      nodes.forEach(n => obs.observe(n));
      // fallback timeout if nothing became visible
      setTimeout(() => {
        const anyVisible = Array.from(nodes).some(n => getComputedStyle(n).opacity === "1");
        if (!anyVisible) nodes.forEach(n => n.classList.add("fade-in"));
      }, 600);
    } else {
      nodes.forEach(n => n.classList.add("fade-in"));
    }

  } catch (err) {
    // ensure content visible on error
    document.querySelectorAll(".section, .project-card, .skill-chip").forEach(n => n.classList.add("fade-in"));
    /* optional: console.error("script error", err); */
  }
});
