<div class="container px-0">
   <footer class="d-flex flex-wrap justify-content-between align-items-center px-3 py-3 mt-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
         <span class="text-body-secondary">&copy; <?= date("Y"); ?> Made with <i class="bx bx-heart align-middle"></i> Xsai</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
         <a href="#">
            <li class="ms-3"><i class="bx bxl-twitter text-secondary"></i></li>
         </a>
         <a href="#">
            <li class="ms-3"><i class="bx bxl-instagram text-secondary"></i></li>
         </a>
         <a href="#">
            <li class="ms-3"><i class="bx bxl-facebook text-secondary"></i></li>
         </a>
      </ul>
   </footer>
</div>

<!-- AOS JavaScript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
   AOS.init();
</script>

<!-- Page cannot be right clickable -->
<!-- <script type="text/javascript">
   document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
   });
</script> -->

</body>

</html>