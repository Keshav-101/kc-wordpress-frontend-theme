document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("themeToggle");
  const body = document.body;

  // Load saved mode
  const savedMode = localStorage.getItem("theme");
  if (savedMode === "dark") {
    body.classList.add("dark-mode");
  }

  // Toggle mode
  toggleBtn.addEventListener("click", function () {
    body.classList.toggle("dark-mode");

    if (body.classList.contains("dark-mode")) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  });

  // Existing feature: title click color change
  const titles = document.querySelectorAll("article h3");
  titles.forEach(title => {
    title.addEventListener("click", () => {
      title.style.color = "#0073aa";
    });
  });
});
