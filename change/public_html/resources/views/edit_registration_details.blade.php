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
      </style>

<div class="login-form">
  <div class="login-form-box">
      <div class="login-form-header">
          <h2>Employee Registration</h2>
        
      </div>
      <form   name="_token" id="_token" method="POST" action="{{url('edit_student_reg_update')}}" id="Registration_Form" enctype="multipart/form-data" name="Registration_Form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="id" value="{{$register->id}}">
          <div class="input-item">
              <input type="text" id="Name" value="{{$register->name}}"name="Name" >
          </div>
          <div class="input-item">
              <input type="email" value="{{$register->email}}" id="email" name="email" >
          </div>
          <div class="input-item">
              <input type="number" id="Phone" value="{{$register->phone}}"  name="Phone" >
          </div>
          <div class="input-item">
            <input type="text"  id="Phone" value="{{$register->gender}}"  name="gender" >
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit" style="width: 112px;margin-top:10px;">
      </form>
  </div>
</div>