<?php
require 'function.php';
$guru = query("SELECT * FROM tbl_pengajar");
if (isset($_POST['cari'])) {
  $guru = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>ACADEMIC CAMP 5 JAVA</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />

  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-academic.PNG" alt="..." /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li>
          <li class="nav-item"><a class="nav-link" href="subjects.php">Subjects</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Welcome To</div>
      <marquee style="background;color:black;">SMKN 5 Kabupaten Tangerang- Tiada Hari Tanpa Prestasi</marquee>
      <div class="masthead-heading text-uppercase"><img src="assets/img/smk5.jpg" width="100%" /></div>
      <a class="btn btn-primary btn-xl text-uppercase" href="#services">Visi & Misi </a>
    </div>
    
  </header>

  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container justify-content-center">
      <div class="row">
        <div class="col">
        <h3 style="text-align:center;"><strong> SMK NEGERI 5 KAB.TANGERANG</strong></h3>
          <img class="rounded" src="assets/img/foto-smk.jpg" width="1000" alt="">
        </div>
        <h1 style="text-align: center;"><strong>Visi</strong></h1>
<blockquote>
Terwujudnya SMK Negeri 5 Kabupaten Tangerang yang cerdas, kompeten, berdaya saing, berwawasan lingkungan dan berakhlak mulia</blockquote>
<h1 style="text-align: center;"><strong>Misi</strong></h1>
<ol>
      	<li>Mewujudkan pembelajaran berstandar nasional dan internasional.</li>
        	<li>Mewujudkan sumber daya yang unggul dalam bidang akademik dan non akademik.</li>
          	<li>Mewujudkan kualitas hubungan masyarakat, dunia usaha dan dunia industri.</li>
 	            <li>Mewujudkan kegiatan kewirausahaan dalam rangka pengembangan diri.</li>
 	              <li>Mewujudkan kegiatan-kegiatan keagamaan.</li>
 	                <li>Mewujudkan pendidikan budaya karakter bangsa.</li>
                  	<li>Mewujudkan kualitas lingkungan hidup sekolah.</li>
                     	<li>Mewujudkan suasana kerja yang nyaman, serasi dan harmonis yang didukung oleh rasa kekeluargaan.</li>
                      	<li>Mewujudkan kualitas pelayanan prima pada peserta didik.</li>
</ol>					</div>
						</div>
			  	</div>
				</div>
					</div>
		</div>
								</div>
					</div>
		</section>
        <div class="col m-5 pt-5">
          <div class="masthead-heading text-uppercase mb-4">
                  </div>
          <marquee style="background;white color:black;">Jl. Insinyur Sutami Jl. Raya Mauk No.Km.1,2, Mauk Bar., Kec. Mauk, Kabupaten Tangerang, Banten 15330</marquee>

        </div>
      </div>
    </div>
  </section>

  <!-- Footer-->
  <footer class="footer bg-dark py-4">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-4 mt-3 text-lg-start">
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-info btn-social mx-2" href="https://wa.me/6283897093838"><i class="fab fa-whatsapp"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://instagram.com/hendrik_dik46"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://twitter.com/hendrik_latos?t=Elo88GbstR2O66zHdDTp6A&s=08"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://github.com/suhendrik95"><i class="fab fa-github"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://youtube.com/channel/UC2gh9RCbOF-1oTCAJ6mNhcA"><i class="fab fa-youtube"></i></a>
        <div class="text-white text-center">Copyright &copy; Camp 5 Java 2022</div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>