<script src="../asset/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../asset/vendors/chart.js/Chart.min.js"></script>
  <script src="../asset/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../asset/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../asset/js/off-canvas.js"></script>
  <script src="../asset/js/hoverable-collapse.js"></script>
  <script src="../asset/js/template.js"></script>
  <script src="../asset/js/settings.js"></script>
  <script src="../asset/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../asset/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../asset/js/dashboard.js"></script>
  <script src="../asset/js/Chart.roundedBarCharts.js"></script>
  <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
   </script>   