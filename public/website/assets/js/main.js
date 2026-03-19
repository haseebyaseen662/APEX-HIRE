document.addEventListener("DOMContentLoaded", () => {
  const resetForm = document.querySelector("#reset-password-form");
  if (resetForm) {
    resetForm.addEventListener("submit", (event) => {
      event.preventDefault();
      const target = resetForm.getAttribute("action") || "login.html";
      window.location.href = target;
    });
  }

  const toggleButtons = document.querySelectorAll("[data-toggle-password]");
  toggleButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const wrapper = button.parentElement;
      if (!wrapper) {
        return;
      }
      const input = wrapper.querySelector("input");
      if (!input) {
        return;
      }
      const isPassword = input.type === "password";
      input.type = isPassword ? "text" : "password";
      const icon = button.querySelector("i");
      if (icon) {
        icon.classList.toggle("bx-hide", !isPassword);
        icon.classList.toggle("bx-show", isPassword);
      }
    });
  });
});
