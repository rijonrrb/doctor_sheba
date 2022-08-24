<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>LiveSchool</title>		
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#Institute").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $("#Department").prop('disabled', false);
            } else{
                $("#Department").prop('disabled', true);
            }
        });
    }).change();
});
$(document).ready(function(){
    $("#Department").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $("#Class").prop('disabled', false);
            } else{
                $("#Class").prop('disabled', true);
            }
        });
    }).change();
});

$(document).ready(function(){
    $("#Class").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $("#Radio").show();
                $("#submit").show();
            } else{
                $("#Radio").hide();
                $("#submit").hide();
            }
        });
    }).change();
});
</script>
</head>
<body>
@include('Navbar.Navbar')
<div class="container-fluid mt-4">
<h3 class="text-warning text-center">Welcome to Examination Center</h3>
<div class="row mt-4 d-flex justify-content-center">
    <div class="col-lg-3">
<select class="form-select" aria-label="Default select example" id="Institute">
  <option selected>Institute Type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<br>
</div>

<div class="col-lg-3">
<select class="form-select" aria-label="Default select example" disabled  id="Department">
  <option selected>Department Type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<br>
</div>

<div class="col-lg-3">
<select class="form-select" aria-label="Default select example" disabled id="Class">
  <option selected>Select Class</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<br>
</div>
</div>
<div class="row mt-4 d-flex justify-content-center" >
    <div class="col-2" id="Radio">
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    &nbsp; Bangla
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    &nbsp; English
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    &nbsp; mathematics
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    &nbsp; Science
  </label>
</div>
</div>
</div>

<div class="row mt-4 d-flex justify-content-center" >
<div class="col-2" id="submit">
<button type="button" class="btn btn-success">Next</button>
</div>
</div>
<div class="position-fixed bottom-0 w-100" >
@include('Footer.Footer')
</div>
</body>
</html>
