<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="../assets/js/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/jqueryKnob/jquery.knob.js"></script>
<script type="text/javascript" src="../assets/js/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="../assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="../assets/js/AdminLTE/app.js"></script>
<script type="text/javascript" src="../assets/js/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript" src="../assets/js/AdminLTE/sesion.js"></script>
<script type="text/javascript" src="../assets/js/AdminLTE/menuUsuarios.js"></script>
<script type="text/javascript" src="../assets/js/AdminLTE/menu.js"></script>
<script type="text/javascript" src="../assets/js/AdminLTE/dashboard.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>


<script type="text/javascript">
    $(function() {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
