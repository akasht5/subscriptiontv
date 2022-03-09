<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('customers/create'); ?>
<div class="row g-3" >
  <div class="col-md-6">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="inputName">
</div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email_id" id="inputEmail">
  </div>
  <div class="col-md-6">
    <label for="inputMobile" class="form-label">Mobile No.</label>
    <input type="text" class="form-control" name="mobile_no" id="inputMobile">
  </div>
  <div class="col-md-6">
    <label for="inputGender" class="form-label">Gender</label></br>
    <input type="radio" name="gender" id="inputGender" value="M">Male</input>
    <input type="radio" name="gender" id="inputGender" value="F">Female</input>
    <input type="radio" name="gender" id="inputGender" value="O">Other</input>
  </div>
  <div class="col-md-6 mb-3">
      <label class="form-label">Photo</label>
      <input type="file" class="form-control" id="inputGroupFile02">
  </div>
  <div class="col-md-3">
    <label for="inputCity" class="form-label">City</label>
    <select id="inputCity" class="form-select" name="city">
      <option selected>Choose...</option>
      <option value="1">Mumbai</option>
      <option value="2">Pune</option>
      <option value="3">Chicago</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputCountry" class="form-label">Country</label>
    <select id="inputCountry" class="form-select" name="country">
      <option selected>Choose...</option>
      <option value="11">India</option>
      <option value="12">USA</option>
      <option value="13">Canada</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-3">
    <label for="inputActive" class="form-label">Active</label>
    <input type="text" class="form-control" id="inputActive" placeholder="0/1" name="active">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</div>
</div>
</form>