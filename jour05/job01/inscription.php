<form action="#" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstname">First name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastname">Last name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="mail">E-mail</label>
      <input type="email" class="form-control" id="mail" name="mail" placeholder="example@example.fr" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="your password" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pwdconfirm">Confirm password</label>
      <input type="password" class="form-control" id="pwdconfirm" name="pwdconfirm" placeholder="confirm your password" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="button" id="inscriptionbutton">Submit</button>
</form>