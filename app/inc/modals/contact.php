<div class="contactform modal fade" id="contact" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Let's Get In Touch.</h4>
      </div>
      <div class="modal-body text-xs-center">
        <ul class="social-media">
          <li class="m-x-2 "><a href="https://twitter.com/james_barrett" target="_blank"><i class="fa fa-3x fa-twitter" aria-hidden="true"></i></a></li>
          <li class="m-x-2 "><a href="https://github.com/jamesbarrett95" target="_blank"><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
          <li class="m-x-2"><a href="https://www.linkedin.com/in/jamesbarrett95/" target="_blank"><i class="fa fa-3x fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
        <hr class="modal-hr">
        <form action="index.php" method="post" id="contactform" name="contactform">
          <fieldset class="form-group" id="nameresult">
            <label for="Name">Name</label>
            <input type="text" class="form-control form-control-danger form-control-success" id="name" name="name" placeholder="Example: John Smith">
          </fieldset>
          <fieldset class="form-group" id="emailresult">
            <label for="Email">Email</label>
            <input type="email" class="form-control form-control-danger form-control-success" id="email" name="email" placeholder="Example: johnsmith@mail.com">
          </fieldset>
          <fieldset class="form-group" id="messageresult">
            <label for="Message">Message</label>
            <textarea class="form-control form-control-danger form-control-success" id="message" rows="5" name="message" placeholder="Hi there! My name is John Smith..."></textarea>
          </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" value="submit" class="btn btn-primary" disabled>Submit</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
