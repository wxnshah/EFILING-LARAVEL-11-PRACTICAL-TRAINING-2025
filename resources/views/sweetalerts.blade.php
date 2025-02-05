@if (Session::has('errors'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Gagal !', text: 'Sila Pastikan Anda Mengisi Dengan Betul Tanpa Meninggalkan Ruangan Kosong', icon: 'error', timerProgressBar: true, timer: 5000
        })
    }, 600);
</script>
{{-- <script>
    $( document ).ready(function() {
         $('#add_child_element').modal('show');
    });
</script> --}}
@endif

@if (Session::has('failed-status'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Log Masuk Gagal !', text: 'Akaun Anda Belum Aktif ! Sila Hubungi Bahagian Teknologi Maklumat Untuk Aktifkan Akaun !', icon: 'error', timerProgressBar: true, timer: 3000
        })
    }, 600);
</script>
@endif

@if (Session::has('failed-login'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Log Masuk Gagal !', text: 'No Kad Pengenalan atau Kata Laluan Salah!', icon: 'error', timerProgressBar: true, timer: 7000,
        })
    }, 600);
</script>
@endif

@if (Session::has('success-insert'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'top-end', showConfirmButton: false, titleText: 'Simpanan Berjaya !', text: 'Maklumat anda telah berjaya disimpan !', icon: 'success', timerProgressBar: true, timer: 3000,
        })
    }, 600);
</script>
@endif

@if (Session::has('success-update'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'top-end', showConfirmButton: false, titleText: 'Kemaskini Berjaya !', text: 'Data anda telah berjaya dikemaskini !', icon: 'success', timerProgressBar: true, timer: 3000,
        })
    }, 600);
</script>
@endif

@if (Session::has('success-delete'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'top-end', showConfirmButton: false, titleText: 'Padam Berjaya !', text: 'Data anda telah berjaya dipadam !', icon: 'success', timerProgressBar: true, timer: 3000,
        })
    }, 600);
</script>
@endif
@if (Session::has('unauthorized'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Tiada Akses !', text: 'Anda Tidak Dibenarkan Untuk Mengakses Halaman Tersebut !', icon: 'error', timerProgressBar: true, timer: 7000
        })
    }, 600);
</script>
@endif

@if (Session::has('email-not-found'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Email Tidak Berdaftar !', text: 'Kami Tidak Dapat Mencari Pengguna Dengan Alamat Email Tersebut ! Sila Masukkan Email Yang Sah !', icon: 'error', timerProgressBar: true, timer: 7000
        })
    }, 600);
</script>
@endif
@if (Session::has('email-sent'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Email Telah Dihantar !', text: 'Email Pautan Tetapan Kata Laluan Baru Telah Berjaya Dihantar Kepada Email Anda', icon: 'success', timerProgressBar: true, timer: 7000
        })
    }, 600);
</script>
@endif
@if (Session::has('password-reset'))
<script>
    setTimeout(function() {
        Swal.fire({
            position: 'center', showConfirmButton: false, titleText: 'Kata Laluan Telah Ditukar !', text: 'Kata Laluan Telah Berjaya Ditukar ! Sila Log Masuk Dengan Menggunakan Kata Laluan Yang Baru', icon: 'success', timerProgressBar: true, timer: 7000
        })
    }, 600);
</script>
@endif
@if (Session::has('token-expired'))
<script>
    setTimeout(function() {
			Swal.fire({
				title: 'Token Telah Tamat Tempoh !',
				icon: 'warning',
				html:
					'Pautan Yang Dihantar Telah Tamat Tempoh ! Sila Set Semula Kata Laluan Baru Di <b>' +
					'<a href="{{ route('lupa_kata_laluan') }}">Sini</a></b>',
				showCloseButton: true,
				focusConfirm: false,
				confirmButtonText:
					'Tetapan Semula'
				}).then(function() {
					window.location = "{{ route('lupa_kata_laluan') }}";
				});
		}, 600);
</script>
@endif
