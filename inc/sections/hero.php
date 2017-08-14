    <div id="top" class="jumbotron jumbotron-fluid no-margin-bottom">
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
              <a href="#about"><i class="fa fa-2x fa-chevron-down" aria-hidden="true"></i></a>
            <?php } ?>
            <ul class="hero-social p-l-0 m-b-0">
              <li class="m-y-1 large"><a href="https://twitter.com/james_barrett" target="_blank"><i class="fa fa-3x fa-twitter" aria-hidden="true"></i></a></li>
              <li class="m-y-1 large"><a href="https://github.com/jamesbarrett95" target="_blank"><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
              <li class="m-y-1 large"><a href="https://www.linkedin.com/in/jamesbarrett95/" target="_blank"><i class="fa fa-3x fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
      </div>
    </div>
