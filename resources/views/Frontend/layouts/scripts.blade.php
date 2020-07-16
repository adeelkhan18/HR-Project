<!-- Bootstrap 3.3.7 -->
<script src="{{ secure_asset('public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ secure_asset('public/frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
<script>
		var e = document.getElementById("filt-monthly"),
			d = document.getElementById("filt-hourly"),
			t = document.getElementById("switcher"),
			m = document.getElementById("monthly"),
			y = document.getElementById("hourly");

		e.addEventListener("click", function () {
			t.checked = false;
			e.classList.add("toggler--is-active");
			d.classList.remove("toggler--is-active");
			m.classList.remove("hide");
			y.classList.add("hide");
		});

		d.addEventListener("click", function () {
			t.checked = true;
			d.classList.add("toggler--is-active");
			e.classList.remove("toggler--is-active");
			m.classList.add("hide");
			y.classList.remove("hide");
		});

		t.addEventListener("click", function () {
			d.classList.toggle("toggler--is-active");
			e.classList.toggle("toggler--is-active");
			m.classList.toggle("hide");
			y.classList.toggle("hide");
		})
	</script>