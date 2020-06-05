<!-- Footer -->
							<footer class="footer">
								<div class="row align-items-center justify-content-xl-between">
									<div class="col-xl-6">
										<div class="copyright text-center text-xl-left text-muted">
											<p class="text-sm font-weight-500">© Non-copyright License 2019</p>
										</div>
									</div>
									<div class="col-xl-6">
										<p class="float-right text-sm font-weight-500"><a href="#">NIS Foreign Missions Dashboard</a></p>
									</div>
								</div>
							</footer>
							<!-- Footer -->
						</div>
					</div>
				</div>
			</div>
			<!-- app-content-->
		</div>
	</div>
	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
	<!-- Ansta Scripts -->
	<!-- Core -->
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Fullside-menu Js-->
	<script src="assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

	<!-- Custom scroll bar Js-->
	<script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>


	<!-- Ansta JS -->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/dashboard-sales.js"></script>
    <!-- Data tables -->
	<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <!-- Date Picker-->
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


	<!-- Echarts JS -->
	<script src="assets/plugins/chart-echarts/echarts.js"></script>
   

	<!-- peitychart -->
	<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
	<script src="assets/plugins/peitychart/peitychart.init.js"></script>

	<!-- Vector Plugin -->
	<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/gdp-data.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
	<script src="assets/js/dashboard2map.js"></script>
    <!-- file uploads js -->
    <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>
    <!-- Optional JS -->
	<script src="assets/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="assets/plugins/chart.js/dist/Chart.extension.js"></script>
    <script>
		$('.dropify').dropify({
			messages: {
				'default': 'Drag and drop a file here or click',
				'replace': 'Drag and drop or click to replace',
				'remove': 'Remove',
				'error': 'Ooops, something wrong appended.'
			},
			error: {
				'fileSize': 'The file size is too big (2M max).'
			}
		});
	</script>

    <script>
		$('.datepicker').datepicker({
		 showOtherMonths: true,
		 selectOtherMonths: true
	   });
	</script>
<script>
		$(function(e) {
			$('#example').DataTable();

			var table = $('#example1').DataTable();
			$('').click( function() {
				var data = table.$('input, select').serialize();
				alert(
					"The following data would have been submitted to the server: \n\n"+
					data.substr( 0, 120 )+'...'
				);
				return false;
			});
			$('#example2').DataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false
			});
		} );
        </script>
    <script>
      // AJAX script
      $(function(){
        $('.country').change(function(){
          var countryid = $(this).val();
          var dataString = 'countryid='+countryid;

          $.ajax({
            type: "POST",
            url: "mission.php",
            data: dataString,
            cache: false,
            success: function(html) {
              $('.mission').html(html);
            }
          });
        });
      });

	</script>
</body>

</html>