<!DOCTYPE html>
<html>
    <head>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>

 <!--JQuery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<link href="style.css" rel="stylesheet"/>

<style>
 
 
</style>

<nav class="navbar bg-body-tertiary shadow-none" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="40" class="d-inline-block align-text-top">
      Bootstrap
    </a>

</nav> 
</head> 
   
    <body>
    <div class="card p-5">
        <div class="card-body">
             <form class="row g-3">
  
 <div class="col-md-3">
    <label for="validationServer03" class="form-label"> Identification Number *</label>
    <input type="text" class="form-control " id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid ID.
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">First Name *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Middle Name *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Last Name *</label>
    <input type="text" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-2">
    <label for="validationCustom04" class="form-label">Gender</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>Female</option>
      <option>Male</option>
    </select>
    <div class="invalid-feedback">
      Please select your gender.
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationServer02" class="form-label">Birthday *</label>
    <input type="Date" class="form-control " id="validationServer02"  required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Contact Number *</label>
    <input type="Number" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label"> Email *</label>
    <input type="Email" class="form-control " id="validationServer02"  required>
  </div>

  <div class="col-md-3 mb-3">
            <label class="form-label">Region *</label>
            <select name="region" class="form-control form-control-md" id="region"></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Province *</label>
            <select name="province" class="form-control form-control-md" id="province"></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">City / Municipality *</label>
            <select name="city" class="form-control form-control-md" id="city"></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
        </div>


        
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip </label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>


        <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>
</div>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <script src="ph-address-selector.js"></script>

</body>
</html>