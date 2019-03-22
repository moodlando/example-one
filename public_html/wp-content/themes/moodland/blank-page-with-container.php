<?php
/**
 * Template Name: English cv
 */

get_header();
?>
<div id="header" class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Tomas Matulionis</h1>
            <h2>WEB Developer</h2>
          </div>
        </div>
      </div>
    </div>
    <div id="content" class="content">
      <div class="container">
        <div class="row">
          <div class="leftinfo col-xl-5 col-lg-5 col-md-5 .col-sm-12 .col-12">
            <div class="clearfix language">
              <ul>
                 <li><a href="https://moodland.lt"><img src="https://moodland.lt/wp-content/themes/moodland/inc/assets/img/lithuania.png" alt="eng flag" width="22" height="20"></a></li>
                <li><a href="https://moodland.lt/en/"><img src="https://moodland.lt/wp-content/themes/moodland/inc/assets/img/eng.png" alt="eng flag" width="22" height="20"></a></li>
              </ul>
            </div>
            <div class="kontaktai">
              <div class="manofoto">
                <ul>
                  <li><img style="width:150px;height:139px;" src="https://moodland.lt/wp-content/themes/moodland/inc/assets/img/ascv.png" alt="fotoofme"></li>
                </ul>
              </div>
              <ul>
                <li><span><i class="fas fa-phone"></i> +37067546836</span></li>
                <li><span><i class="fas fa-envelope"></i> tomukasmatulionis@gmail.com</span></li>
                <li><span><i class="fas fa-home"></i> Vilnius</span></li>
              </ul>
            </div>
            <hr style="
    height: 1px;
">
            <div class="languages">
              <ul>
                <li><h3>LANGUAGES</h3></li>
                <li><h4>LITHUANIAN</h4></li>
                <li><span>Native</span></li>
                <li><h4>ENGLISH</h4></li>
                <li><span>Speaking/Writing/Understanding - Perfectly</span></li>
                <li><h4>RUSSIAN</h4></li>
                <li><span>Speaking/Writing/Understanding - Good</span></li>
              </ul>
            </div>
          </div>
          <div class="rightinfo col-md-offset-1 col-lg-offset-1 col-xl-offset-1 col-xl-6 col-lg-6 col-md-6 .col-sm-12 .col-12">

<!--
            <div class="apiemane">
              <div class="apiebox"><h3>ABOUT ME</h3></div>
              <p>I've been studying programming since I was 16 years old. I can quickly understand latest technologies . I am very punctual person, every second matters. I am not afraid of challenges.  Every day i try to improve my programing skills. I am comfortable working as a member of a team and independently. I always draw attention to the smallest detail.</p>
            </div>


            //-->
            <div class="darbopatirtis">
              <div class="apiebox"><h3>WORK EXPERIENCE</h3></div>
              <p>I have 2 years of experience working with these technologies:</p>
              <ul>
                <li>HTML5 / CSS3 (SASS)</li>
<li>Wordpress / Joomla</li>
                <li>Javascript / JQuery</li>
                <li>Bootstrap</li>
                <li>Photoshop</li>
<li>Git</li>
</ul><p>I can easily make a website responsive, all device frienly.</p>
            </div>
            <div class="rekomendacijos">
              <div class="apiebox"><h3>EXAMPLES OF MY WORK</h3></div>
              <ul>
                <li><a href="http://zinynas.epaveldas.lt" target="_blank">www.zinynas.epaveldas.lt</a> </li>
                <li><a href="http://www.nek.lt" target="_blank">www.nek.lt</a> </li>
                  <li><a href="https://www.kibirvibir.lt" target="_blank">www.kibirvibir.lt</a></li>
              <li><a href="http://elme.lt" target="_blank">www.elme.lt</a>   (FRONT-END) </li>
              <li><a href="https://versloakseleratorius.tele2.lt" target="_blank">www.versloakseleratorius.tele2.lt</a>   (FRONT-END) </li>
              </ul></div><div class="rekomendacijos"><div class="apiebox"><h3>RECCOMMENDATIONS</h3></div><hr><div>1.</div><div class="rekomendacijosinfo"><img src="https://moodland.lt/wp-content/themes/moodland/inc/assets/img/feath.png" alt="paveiksliukas">
                <p>Mantas Janavičius</p>
                <p>Lithuanian national Martyno <br>
               Mažvydo library
                </p>
                <p>+370 5 239 85 08</p>
                <p>Mantas.janavicius@lnb.lt</p>
              </div>
<hr>
<div>2.</div>

              <div class="rekomendacijosinfocraft clearfix">
                <img id="myImg" src="https://moodland.lt/wp-content/themes/moodland/inc/assets/img/crafts.jpg" alt="Snow" style="width:100%;max-width:300px">

                <div id="myModal" class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                </div>
              </div>
            </div>
            </div></div></div></div></div>

            <script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById('myImg');
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		    modal.style.display = "block";
		    modalImg.src = this.src;
		    captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}
		</script>

<?php
get_footer();
