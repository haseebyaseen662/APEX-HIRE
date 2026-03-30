(function () {
  const body = document.body;
  const sidebar = document.querySelector(".portal-sidebar");
  const overlay = document.querySelector(".portal-overlay");
  const toggles = document.querySelectorAll("[data-sidebar-toggle]");
  const closeButtons = document.querySelectorAll("[data-sidebar-close]");
  const navLinks = document.querySelectorAll(".portal-sidebar a");
  const notificationGroups = document.querySelectorAll("[data-notification-root]");
  const desktopMedia = window.matchMedia("(min-width: 1024px)");
  const storageKey = "apexhire-sidebar-collapsed";

  const isDesktop = () => desktopMedia.matches;

  function updateToggleIcons() {
    toggles.forEach((toggle) => {
      const icon = toggle.querySelector("i");

      if (!icon) {
        return;
      }

      if (isDesktop()) {
        icon.className = body.classList.contains("sidebar-collapsed")
          ? "bx bx-menu-alt-left text-xl"
          : "bx bx-menu text-xl";
        toggle.setAttribute(
          "aria-label",
          body.classList.contains("sidebar-collapsed") ? "Expand sidebar" : "Collapse sidebar"
        );
      } else {
        icon.className = body.classList.contains("sidebar-open") ? "bx bx-x text-xl" : "bx bx-menu text-xl";
        toggle.setAttribute("aria-label", body.classList.contains("sidebar-open") ? "Close sidebar" : "Open sidebar");
      }
    });
  }

  function closeMobileSidebar() {
    body.classList.remove("sidebar-open");
    updateToggleIcons();
  }

  function setDesktopCollapsed(collapsed) {
    body.classList.toggle("sidebar-collapsed", collapsed);
    window.localStorage.setItem(storageKey, collapsed ? "true" : "false");
    updateToggleIcons();
  }

  function syncLayoutMode() {
    if (isDesktop()) {
      body.classList.remove("sidebar-open");
      body.classList.toggle("sidebar-collapsed", window.localStorage.getItem(storageKey) === "true");
    } else {
      body.classList.remove("sidebar-collapsed");
      body.classList.remove("sidebar-open");
    }

    updateToggleIcons();
  }

  if (sidebar && toggles.length) {
    toggles.forEach((toggle) => {
      toggle.addEventListener("click", function () {
        if (isDesktop()) {
          setDesktopCollapsed(!body.classList.contains("sidebar-collapsed"));
          return;
        }

        body.classList.toggle("sidebar-open");
        updateToggleIcons();
      });
    });

    closeButtons.forEach((button) => {
      button.addEventListener("click", closeMobileSidebar);
    });

    if (overlay) {
      overlay.addEventListener("click", closeMobileSidebar);
    }

    navLinks.forEach((link) => {
      link.addEventListener("click", function () {
        if (!isDesktop()) {
          closeMobileSidebar();
        }
      });
    });

    if (typeof desktopMedia.addEventListener === "function") {
      desktopMedia.addEventListener("change", syncLayoutMode);
    } else if (typeof desktopMedia.addListener === "function") {
      desktopMedia.addListener(syncLayoutMode);
    }

    syncLayoutMode();
  }

  notificationGroups.forEach((group) => {
    const toggle = group.querySelector("[data-notification-toggle]");
    const menu = group.querySelector("[data-notification-menu]");

    if (!toggle || !menu) {
      return;
    }

    toggle.addEventListener("click", function (event) {
      event.stopPropagation();
      const shouldOpen = !group.classList.contains("is-open");

      notificationGroups.forEach((item) => {
        item.classList.remove("is-open");
        const itemToggle = item.querySelector("[data-notification-toggle]");

        if (itemToggle) {
          itemToggle.setAttribute("aria-expanded", "false");
        }
      });

      group.classList.toggle("is-open", shouldOpen);
      toggle.setAttribute("aria-expanded", shouldOpen ? "true" : "false");
    });

    menu.addEventListener("click", function (event) {
      event.stopPropagation();
    });
  });

  document.addEventListener("click", function () {
    notificationGroups.forEach((group) => {
      group.classList.remove("is-open");
      const toggle = group.querySelector("[data-notification-toggle]");

      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      if (body.classList.contains("sidebar-open")) {
        closeMobileSidebar();
      }

      notificationGroups.forEach((group) => {
        group.classList.remove("is-open");
        const toggle = group.querySelector("[data-notification-toggle]");

        if (toggle) {
          toggle.setAttribute("aria-expanded", "false");
        }
      });
    }
  });
})();
