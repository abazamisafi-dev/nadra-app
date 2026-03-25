
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Laravel</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			</ul>
			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ms-auto">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item"><a class="nav-link" href="">Login</a></li>
					<li class="nav-item"><a class="nav-link" href="">Register</a></li>
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }}
						</a>
						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							<form id="logout-form" action="" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav> --}}
<style>
    /* Style for the navbar */
    .navbar {
        background-color: #fff; /* Set background color to white */
        border-bottom: 1px solid #ddd; /* Add a border at the bottom */
        margin-bottom: 0; /* Remove any margin at the bottom */
        height: 50px; /* Set height to 70 pixels */
		position: relative;
    }
	.logo{
		margin-left: 14.5%;
	}
	.list{
		margin-right: 17%;
		font-weight: bold;
		text-decoration: none;
		font-family: Arial, sans-serif;
		font-size: 9px;
	}

	#l1:hover{
		color: rgb(0, 104, 172);
	}
	.logo{
	display: block;
    max-width: 130px;
    height: auto;
	}
	@media (max-width: 430px){
		.logo{
			margin-left: 1%;
			display: block;
			max-width: 180px;
			height: auto;
		}
		.navbar{
			height: 70px;
		}
		#l1{
			background-color: RGB(29 39 56);

		}
		#l1{
			color: white;
			padding-left: 4%;
		}
		#navbarNav{
		width: 600px;
		margin-left: -30px;
		margin-right: -15px;
		z-index: 1;



}
	}
	#toggle{
		border: none;
		margin-right: -15px;
		margin-bottom: -30px;
		
	}
	.navbar-toggler-icon {
    /* Additional styling as needed */
}

.line {
    width: 28px;
    height: 3px;
    background-color: rgb(0, 104, 172); /* Set the color of the lines to blue */
    margin: 5px 0;
}
.hidden{
	display: none;
}
#box{
	display: none;
}

</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Logo -->
        <a class="logo navbar-brand" href="https://visa.nadra.gov.pk/e-visa/welcome">
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo" height="30">
        </a>

        <!-- Toggle Button for Small Screens -->
		<button class="navbar-toggler"  type="button" id="toggleButton" onclick="togglefunc()">
			<span class="navbar-toggler-icon" id="iconToggle"></span>
			{{-- <span class="close-icon" >&times;</span> --}}
			
	
		</button>
	

	
		
        <!-- Navbar Links -->
        <div class="list collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active" style="padding-left:15px;">
                    <a class="nav-link " id="l1" href="https://visa.nadra.gov.pk/e-visa/welcome">HOME</a>
                </li>
                <li class="nav-item active" style="padding-left:15px;">
                    <a class="nav-link" id="l1" href="https://visa.nadra.gov.pk/how-to-apply/">GUIDLINES</a>
                </li>
                <li class="nav-item active"style="padding-left:15px;">
                    <a class="nav-link" id="l1" href="https://visa.nadra.gov.pk/download/">DOWNLOAD</a>
                </li>
				<li class="nav-item active"style="padding-left:15px;">
                    <a class="nav-link" id="l1" href="https://visa.nadra.gov.pk/faqs/">FAQ</a>
                </li>
				<li class="nav-item active"style="padding-left:15px;">
                    <a class="nav-link" id="l1" href="https://visa.nadra.gov.pk/contact/">CONTACT US</a>
                </li>
            </ul>
        </div>
		
    </div>
</nav>




<script>

function togglefunc() {

	var dropdownContent = document.getElementById("navbarNav");
    dropdownContent.classList.toggle("show");
	
}

document.getElementById("toggleButton").addEventListener("click", function() {
    var icon = document.getElementById("iconToggle");
    if (icon.classList.contains("navbar-toggler-icon")) {
        // If current icon is "navbar-toggler-icon", change it to "fa-times" (close icon)
        icon.classList.remove("navbar-toggler-icon");
        icon.classList.add("fas", "fa-times");
    } else {
        // If current icon is "fa-times" (close icon), change it back to "navbar-toggler-icon" (hamburger icon)
        icon.classList.remove("fas", "fa-times");
        icon.classList.add("navbar-toggler-icon");
    }
});


</script> 

