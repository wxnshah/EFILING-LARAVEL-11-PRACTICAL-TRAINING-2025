				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid px-4">
						<div class="d-flex align-items-center justify-content-between small">
							<div class="text-muted">Copyright DK &copy; {{ config('app.name') }} {{ date('Y') }}</div>
							<div>
								<a href="#">Privacy Policy</a> &middot; <a href="#">Terms &amp; Conditions</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="{{ asset('js/bootstrap@5.2.3/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('js/scripts.js') }}"></script>
		<script src="{{ asset('js/my-scripts.js') }}"></script>
		
		<!-- Datatables JS -->
		<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('js/datatables/dataTables.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('js/datatables/dataTables.buttons.min.js') }}"></script>
		<script src="{{ asset('js/datatables/buttons.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('js/datatables/ajax/jszip.min.js') }}"></script>
		<script src="{{ asset('js/datatables/ajax/pdfmake.min.js') }}"></script>
		<script src="{{ asset('js/datatables/ajax/vfs_fonts.js') }}"></script>
		<script src="{{ asset('js/datatables/buttons/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('js/datatables/buttons/buttons.print.min.js') }}"></script>
		<script src="{{ asset('js/datatables/my-script-dataTables.js') }}"></script>
		<!-- End Datatables JS -->
		
		<!-- Select2 JS -->
		<script src="{{ asset('js/select2/select2.min.js') }}"></script>
		<!-- End Select2 JS -->
		
		<!-- DatePicker JS -->
		<script src="{{ asset('js/datepicker/bootstrap-datepicker.min.js') }}"></script>
		<!-- End DatePicker JS -->
		
		<!-- Sweet Alerts js -->
		<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
		<!-- Sweet Alerts js ends -->
		
		<script src="js/chartjs/chart.min.js"></script>
		<script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
		<script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
	</body>
</html>