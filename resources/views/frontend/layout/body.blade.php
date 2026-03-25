<style>
    /* Center the card horizontally and vertically */
    .card-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 80px);
        background-color: white; /* Set background color for the entire page */
        position: relative;
        
        
    }

    .card {
       
        width: 37%;
        background-color: #f5f5f5; /* Set background color for the card */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        transition: box-shadow 0.3s; /* Add transition for shadow effect */
        
        
        
        
    }

    /* Change shadow on hover */
    .card:hover {
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); /* Change shadow on hover */
        background-color: white;
    }

    /* Blue line at the top-left corner */
    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 10%;
        height: 3px;
        margin-left: 5%;
        background-color: rgb(0, 104, 172); /* Blue color for the line */
       
    }
    .img-fluid{
        
        width: 130px;
    }
    #imagee{
        margin-left:5px;
        width: 100px;
        height:140px;
    }
    @media (max-width: 430px) { /* Apply styles for screens larger than 768px (tablets and desktops) */
    .card {
      width: 85%; /* Width for larger screens */
      text-align: center; /* Center text horizontally */
     
      margin-top: -70px;

   
      
     

     
    }
    #imagee{
        margin-left: 150%;
        width: 200px;
        height: 140px;

    }
    .card-wrapper{
        height: 150vh;
        
        
    }
    .img-fluid {
        margin-left: 150%;
    }
  }
 
  }


  .styled_button:hover {
        
        
    }		
#log{
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); /* Change shadow on hover */
    background-color: rgb(0,104,172);
    color: white;
    height: 30px;
    padding-top: 3px;
    margin-top: 5px;
    width: 110px;
    font-size: 14px;
    text-decoration: none;
}
#ref{
    margin: 25%;
    color: rgb(0, 104, 172);
    font-size: 12px;
    font-weight: bold;
    font-family: Arial, sans-serif;
}
#ref:hover{
    text-decoration: none;
}
</style>
<div class="card-wrapper">
    <div class="card">
        <div class="card-body">
         <div class="row ">
            <div class="col-12"><a href="#" id="ref">Visa Reference Number - 88003563497</a></div>
         </div>
         <br>
         <hr/>
      
                <div class="row" style="margin-top:8px; ">
                    
                    <div class="col-4" style="border: 5px;">
                        <img src="{{ asset('images/pic.jpeg') }}" style=" " class="img-fluid" id="imagee" alt="Image">
                    </div>
                    <div class="col-md-8">	
                                            
                                            
                        <div class="row" style="">
                            <div class="col-md-5 ">
                                <label style="font-weight: bold;    font-size: 10px;
                                font-family: Arial;">NAME</label>
                            </div>
                
                            <div class="col-md-7 ">
                                <p style="font-size: 15px;  font-size: 10px;
                                font-family: Arial;">Safi   Maroof Khan</p>
                            </div>
                        </div>
                    
                        <div class="row" style="margin-top:8px;">
                            <div class="col-md-5 "><span style="     font-size: 24;     font-weight: bold;  font-size: 10px;
                                font-family: Arial;">Passport No</span>
                                
                            </div>
                
                            <div class="col-md-7 ">
                                <p style="font-size: 15px;  font-size: 10px;
                                font-family: Arial;">P05425629</p>
                            </div>
                            
                            
                            
                            
                            
                        </div>
                    
                        <div class="row" style="margin-top:8px;">
                            <div class="col-md-5 "><span style="     font-size: 24;     font-weight: bold;  font-size: 10px;
                                font-family: Arial;">Passport Country</span>
                                
                                
                                
                                
                            </div>
                
                            <div class="col-md-7 ">
                                <p style="font-size: 15px; font-size: 10px;
                                font-family: Arial;">Afghanistan</p>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-top:8px;">
                            <div class="col-md-5">
                                <label style="font-weight: bold; font-size: 10px;
                                font-family: Arial;">Visa Category</label>
                            </div>
                
                            <div class="col-md-7 ">
                                <p style="font-size: 15px; font-size: 10px;
                                font-family: Arial;">Medical</p>
                            </div>
                        </div>	
                    
                     </div>
           
                
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-5 ">
                            <label style="font-weight: bold; font-size: 10px;
                            font-family: Arial;">Visa Sub Category</label>
                        </div>
            
                        <div class="col-md-7 ">
                            <p style="font-size: 15px; font-size: 10px;
                            font-family: Arial;">Short-Term</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-5 ">
                            <label style="font-weight: bold; font-size: 10px;
                            font-family: Arial;">Application Type</label>
                        </div>
            
                        <div class="col-md-7 ">
                            <p style="font-size: 15px; font-size: 10px;
                            font-family: Arial;">Entry</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" style="">
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-5 ">
                            <label style="font-weight: bold; font-size: 10px;
                            font-family: Arial;">Staying Facility</label>
                        </div>
            
                        <div class="col-md-7 ">
                            <p style="font-size: 15px; font-size: 10px;
                            font-family: Arial;">Single Entry</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-5 ">
                            <label style="font-weight: bold; font-size: 10px;
                            font-family: Arial;">Visa Start Date</label>
                        </div>
            
                        <div class="col-md-7 ">
                            <p style="font-size: 15px; font-size: 10px;
                            font-family: Arial;"> 28 apr 2024</p>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="row" style="">
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-5 ">
                            <label style="font-weight: bold; font-size: 10px;
                            font-family: Arial;">Visa End Date</label>
                        </div>
            
                        <div class="col-md-7 ">
                            <p style="font-size: 15px; font-size: 10px;
                            font-family: Arial;"> 27 jul 2024</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-5 ">
                            <label style="font-weight: bold; font-size: 10px;
                            font-family: Arial;">Visa Duration</label>
                        </div>
            
                        <div class="col-md-7 ">
                            <p style="font-size: 15px; font-size: 10px;
                            font-family: Arial;">30 day(s)</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row " style="text-align: center; display: flex;
            justify-content: center;
            align-items: center; "><a href="#" class="styled_button" id="log">Back to Login</a>
            </div>
        </div>
    </div>
</div>

{{--
<script>
    // JavaScript to change button color on click
    document.getElementById('myButton').addEventListener('click', function() {
      this.classList.remove('btn-link'); // Remove link button class
      this.classList.add('btn', 'btn-success'); // Add success button class
    });
  </script> --}}

  