
        <!-- footer content -->
        <footer>
          <div class="pull-left">
            Sistem Informasi Nilai Raport.
          </div>
          <div class="pull-right">
            by <strong>Astrad</strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=$baseurl?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=$baseurl?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=$baseurl?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=$baseurl?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=$baseurl?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?=$baseurl?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?=$baseurl?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=$baseurl?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=$baseurl?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=$baseurl?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=$baseurl?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=$baseurl?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=$baseurl?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=$baseurl?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=$baseurl?>assets/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=$baseurl?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?=$baseurl?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?=$baseurl?>assets/build/js/custom.min.js"></script>

    <!-- script -->
    <script type="text/javascript">
      function showhide() {
        var b = document.getElementById('pass');
        if (b.type == 'password') {
          b.type = 'text';
        }else{
          b.type = 'password';
        }
      }
    </script>
  </body>
</html>