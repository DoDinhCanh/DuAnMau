<!-- Footer -->
    <footer class="footer">
      <div class="footer-content">
        <div class="column">
          <h3>Funio.</h3>
          <p>623 Đường Nguyễn Trãi, Quận 5, TP.HCM</p>
        </div>
        <div class="column">
          <h4>Links</h4>
          <p>About</p>
          <p>Contact</p>
        </div>
        <div class="column">
          <h4>Help</h4>
          <p>Payment Options</p>
          <p>Privacy Policy</p>
        </div>
        <div class="column">
          <h4>Newsletter</h4>
          <input type="email" placeholder="Email của bạn" />
          <button>Đăng ký</button>
        </div>
      </div>
      <div class="footer-bottom">© 2025 Funio. All rights reserved.</div>
    </footer>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const userIcon = document.querySelector(".user-icon");
        const dropdownMenu = document.querySelector(".dropdown-menu");

        userIcon.addEventListener("click", function () {
          dropdownMenu.style.display =
            dropdownMenu.style.display === "block" ? "none" : "block";
        });

        document.addEventListener("click", function (e) {
          if (!e.target.closest(".user-dropdown")) {
            dropdownMenu.style.display = "none";
          }
        });
      });
    </script>
  </body>
</html>
