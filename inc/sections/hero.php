    <div class="jumbotron jumbotron-fluid no-margin-bottom">
      <div class="container text-xs-center">
        <noscript>
            <div style="margin-bottom: 40px;">
              <h3 class="white">In order to contact me you must have JavaScript enabled.</h1>
              <u><a class="contact-link white" href="http://www.enable-javascript.com" target="_blank">Instructions how
              to enable JavaScript in your web browser</a></u>
            </div>
        </noscript>
          <?php
            if(isset($thankyou)) {
              echo "<h1 class='display-2 m-t-1 m-b-2 white'>Thank you!</h1>";
              echo "<p class='lead white'>You will be redirected shortly.</p>";
            } else { ?>
              <p class="lead white">Aspriring Full-Stack Developer</p>
              <h1 class="display-2 m-t-1 m-b-2 white">James Barrett</h1>
              <button class="contactBtn m-b-3" type="button" data-toggle="modal" data-target="#contact">Contact me here</button>
              <a href="#work"><i class="fa fa-2x fa-chevron-down" aria-hidden="true"></i></a>
            <?php } ?>
      </div>
    </div>
