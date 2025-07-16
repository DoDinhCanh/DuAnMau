<script>
      const tabLinks = document.querySelectorAll(".tab-link");
      const tabContents = document.querySelectorAll(".tab-content");

      tabLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
          e.preventDefault();

          // remove active
          tabLinks.forEach((link) => link.classList.remove("active"));
          tabContents.forEach((tab) => tab.classList.remove("active"));

          // add active
          link.classList.add("active");
          document.getElementById(link.dataset.tab).classList.add("active");
        });
      });
    </script>
  </body>
</html>