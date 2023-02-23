<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/register.css">
    <!-- <link rel="stylesheet" href="css/select.css"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">  
    <div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
        <div class="inputfield">
          <label>Quelle formation?</label>
          <div class="custom_select">
          <select name="pets" id="pet-select">
                <option value="Expert UX">Expert UX</option>
                <option value="Expert SEO">Expert SEO</option>
                <option value="Expert Traffic Manager">Expert Traffic Manager</option>
                <option value="Expert SEA">Expert SEA</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="Social Media Manager">Social Media Manager</option>
                <option value="Marketing Digital E-commerce">Marketing Digital E-commerce</option>

            </select>  
          </div>
       </div> 
    
</div>

    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>

        </div>

        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
