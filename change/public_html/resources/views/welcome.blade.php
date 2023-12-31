<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 

<title>Employee data</title>

 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="pratices/resources/css/form.css">

</head>
<style>
    
.login-form {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form-box {
    background-color: #fff;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    padding: 10px 30px 30px 30px;
    width: 600px;
  border-radius: 
  5px;
}

.login-form-header {
    margin-bottom: 40px;
}

.login-form-header h2 {
    font-size: 26px;
    font-weight: 700;
    font-family: Arial, Helvetica, sans-serif;
}

.login-form-header p {
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
    line-height: 0;
}

.login-form-header p a {
    text-decoration: none;
    color: #0e74bd;
}

.input-item {
    margin-bottom: 20px;
}

.input-item input {
    width: calc(100% - 30px);
    padding: 16px;
    border-radius: 5px;
    border: 1px solid #787878;
}

button {
    margin-top: 5px;
    background-color: #0e74bd;
    border: none;
    color: #fff;
    padding: 12px 40px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer;
}

/* custom Checkbox */
.remember-pass {
    display: block;
    margin-bottom: 15px;
}

.remember-pass input {
    padding: 0;
    height: initial;
    width: initial;
    margin-bottom: 0;
    display: none;
    cursor: pointer;
}

.remember-pass label {
    position: relative;
    cursor: pointer;
}

.remember-pass label:before {
    content: '';
    background-color: transparent;
    border: 2px solid #0e74bd;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
    padding: 10px;
    display: inline-block;
    position: relative;
    vertical-align: middle;
    cursor: pointer;
    margin-right: 10px;
}

.remember-pass label {
    font-family: Arial, Helvetica, sans-serif;
}

.remember-pass input:checked+label:after {
    content: '';
    display: block;
    position: absolute;
    top: 1px;
    left: 8px;
    width: 6px;
    height: 12px;
    border: solid #0e74bd;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
.input-item select {
    width: calc(100% - 30px);
    padding: 16px;
    border-radius: 5px;
    border: 1px solid #787878;
}
.reg{
    margin-top: 5px;
    background-color: #0e74bd;
    border: none;
    color: #fff;
    padding: 12px 40px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer;

}
.reg a{
    color: #fff;
}
    </style>
 

<body>

<div class="login-form">
        <div class="login-form-box">
            <div class="login-form-header">
                <h2>Employee Registration</h2>
              
            </div>
            <form  value="{{csrf_token()}}" name="_token" id="_token" method="post" action="formsumit" id="Registration_Form" enctype="multipart/form-data" name="Registration_Form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-item">
                    <input type="text" id="Name" name="Name" placeholder="User Name">
                </div>
                <div class="input-item">
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="input-item">
                    <input type="number" id="Phone"  name="Phone" placeholder="Phone">
                </div>
                <div class="input-item">
                

<select name="Gender" id="Gender">
<option value="">Gender</option>
  <option value="Male">Male</option>
  <option value="Male">Female</option>

</select>
</div>
              
                <button>Submit</button> <span class="reg">   <a href="reg_details_index"> Reg-Details</a></span>
            </form>
        </div>
    </div>
    <script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </script>
</body>



</html>