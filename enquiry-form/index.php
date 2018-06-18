<html>
     <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            .logo img{
            height: 70px;
            width: 100px;
            } 
            
            footer{
                padding-bottom: 50px;
            }
        </style>
    </head>
    <body class="bg container">
        
        <div class="logo">
            <a href="#"><img src="images/img8.jpg" alt=""/></a>
        </div>
        
        <div class="form-div">
            <form method="POST" action="enquiry-submit.php">
            <div class="panel-heading">
                <div style="float:left"><b>Vehicle Enquiry Form</b>
               </div>
            
               <div style="float:right">
                   <b>* required field</b>
               </div>
            </div>
            
            <div class="panel-body">
                The vehicle's location and dealer contact details will be emailed to you when the enquiry is 
                submitted<br><br>
                
                <label for="name">Name *</label>
                <div class='form-group'>
                    <input type='text' name="name" pattern="[A-Za-z]{1,32}" title="please enter character" 
                           required class="form-control">
                </div>
                
                <label for="email"><b>Email *</b></label>
                <div class='form-group'>
                    <input type='email' name="email" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="Must contain a 
                           number, uppercase character & lowercase character with length atleast 8 characters"
                           required class="form-control">
                </div>
                
                <label for="pincode"><b>Pincode *</b></label>
                <div class='form-group'>
                    <input type='text' name="pincode" pattern="[0-9]{6}" class="form-control" title="please enter valid pincode" required>
                </div>
                
                <label for="phone"><b>Phone *</b></label>
                <div class='form-group'>
                    <input type='text' name="phone" class="form-control" pattern="[7-9]{1}[0-9]{9}"  required>
                </div>
                
                <label for="comments"><b>Comments *</b></label>
                <div class='form-group'>
                    <input type='text' name="comments" class="form-control" style="font-weight:bold" required>
                </div>
                
                <div class="radio">
                    <p style="float:left"><b>Do you have a trade in? </b>&emsp;&emsp;</p>
                    <label>
                        <input type="radio" name="trade" value="No">No
                    </label>
                    <label>
                        <input type="radio" name="trade" value="Yes">Yes
                    </label>                    
                </div>
                
                <div class="checkbox">
                    <label class="form-group">
                        <input type="checkbox" name="chk[]" value="Confirm">Confirm dealer form
                    </label><br>
                    
                    <label class="form-group">
                        <input type="checkbox" name="chk[]" value="Subscribe">Subscribe to Car sales newsletter
                    </label><br>
                    
                    <label class="form-group">
                        <input type="checkbox" name="chk[]" value="Remember">Remember my details
                    </label><br>
                </div>
                
                <center><button type="submit" class="btn-primary">Submit</button></center>
                
                                
            
            </div>
            
        </form>
    </div>
        
        <footer>
            <b><span class="glyphicon glyphicon-phone"></span>Contact Us: 9434533333  </b>
        </footer>
    </body>
</html>
