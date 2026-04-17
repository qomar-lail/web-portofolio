
<footer class="bg-slate-800 text-center py-6 mt-10">
    <p class="text-gray-400">
        © 2026 - Portfolio by Qomar_lail
    </p>

    <div class="mt-2">
        <a href="https://github.com/qomar-lail/" class="text-cyan-400 mx-2">GitHub</a>
        <a href="" class="text-cyan-400 mx-2">LinkedIn</a>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
<script>
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add("bg-slate-900/90", "backdrop-blur", "shadow-lg");
    } else {
        navbar.classList.remove("bg-slate-900/90", "backdrop-blur", "shadow-lg");
    }
});
</script>
</body>
</html>