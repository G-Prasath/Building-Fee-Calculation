<!DOCTYPE html>
  <html lang="en">
    <head>
       
      <title>Fees Calculation</title>
      
      <meta charset="utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <meta name="description" content="A survey form used by a hotel to get the satisfaction level of visitors">
      
      <meta name="author" content="Edward Mc Evoy 2019">

      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

      <style>
        .demolition-hide, .layout-hide{
          display: none;
        }
        #frontage-1, #frontage-2, #frontage-3, #frontage-4, #frontage-label{
          display: none;
        }
        #Road-1, #Road-2, #Road-3, #Road-4, #Road-label{
          display:none;
        } 
      </style>

    </head>
    
  <body>
      
    <div class="container"> <!-- open container -->
    
        <!--  close row --> 
      
      <div class="row"> <!--  open row -->   
       
          <div id="form-tagline" class="col-md-4">
              <div class="form-tagline">
                  <i class="fa fa-envelope fa-5x"></i>
                  <h2>How Are We Doing?</h2>
                  <p id="description" class="lead">We really value your opinion</p>
              </div>
          </div>
         




		      <div id="form-content" class="col-md-8">
            
            <form id="survey-form" method="post" action="calculation.php"> <!-- open form -->

           <!-- ------------------------------ Total Buildup Area -------- -->
            <div class="row form-group">
                  <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Total Buildup Area:</label>
                  </div>
                  
                  <div class="input-group col-sm-9">                
                    <input id="name" type="text" class="form-control" placeholder="in Sq.m" name="Buildup-Area">
                  </div>
            </div>

          <!-- ---------------------------- FSA Area ------ -->
                <div class="row form-group">
                  <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Total FSI Area:</label>
                  </div>
                  
                  <div class="input-group col-sm-9">                
                    <input id="name" type="text" class="form-control" placeholder="in Sq.m" name="FSA-Area">
                  </div>
                </div>

          <!-- ---------------------------- Total Plot Area ------ -->
                <div class="row form-group">
                  <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Total Plot Area:</label>
                  </div>
                  
                  <div class="input-group col-sm-9">                
                    <input id="name" type="text" class="form-control" placeholder="in Sq.m" name="Plot-Area">
                  </div>
                </div>

          <!-- ---------------------- No Of Dwelling unit ------------ -->
          <div class="row form-group">
                  <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*No Of Unit:</label>
                  </div>
                  
                  <div class="input-group col-sm-9">                
                    <input id="name" type="text" class="form-control" placeholder="No Of Dwelling units" name="Dwelling">
                  </div>
          </div>

          <!-- ------------------ Layout Approved --------------------  -->
          <div class="form-group row"> 
                
                  <div class="col-sm-3">
                    <label class="control-label" for="visit-purpose">*Layout Approval :</label>
                  </div>

                  <div class="col-sm-9">
                    <select id="layout" name="layout">
                      <option>Choose opt</option>
                      <option name="layout" value="approved">Approved</option>
                      <option name="layout" value="unapproved">Un Approved</option>
                  </select>
                  </div>

                  <div class="col-sm-3"></div>
                  <div class="input-group col-sm-9 mb-2">                 
                     <input type="text" class="form-control layout-hide" placeholder="Guideline value Per Sq.m" name="Guideline">
                   </div>
          </div>

          <!-- ---------------------- Land Classification ----------  -->
          <div class="form-group row"> 
                
                <div class="col-sm-3">
                  <label class="control-label" for="visit-purpose">Land Classification :</label>
                </div>

                <div class="col-sm-9">
                  <select id="land" name="land">
                    <option>Choose opt</option>
                    <option name="land" value="detached">Detached</option>
                    <option name="land" value="continue">Continues</option>
                  </select>
                </div>
          </div>

          <!-- --------------------- Demolition in site -----------------  -->
                <div class="form-group row"> 
                
                  <div class="col-sm-3">
                    <label class="control-label" for="visit-purpose">Demolition in site :</label>
                  </div>

                  <div class="col-sm-9">
                    <select id="demolition" name="demolition">
                      <option>Choose opt</option>
                      <option name="Demolition" value="1">Yes</option>
                      <option name="Demolition" value="0">No</option>
                  </select>
                  </div>

                  
                  <div class="col-sm-3"></div>
                  <div class="input-group col-sm-9 mb-2">                 
                     <input type="text" class="form-control demolition-hide" placeholder="Ground Floor" name="Ground-Floor">
                   </div>

                   <div class="col-sm-3"></div>
                  <div class="input-group col-sm-9 mb-2">                  
                     <input type="text" class="form-control demolition-hide" placeholder="First Floor" name="First-Floor">
                   </div>

                   <div class="col-sm-3"></div>
                  <div class="input-group col-sm-9 mb-2">                   
                     <input type="text" class="form-control demolition-hide" placeholder="Second Floor" name="Second-Floor">
                   </div>

                   <div class="col-sm-3"></div>
                  <div class="input-group col-sm-9">                  
                     <input type="text" class="form-control demolition-hide" placeholder="Compound Wall" name="Compound-Wall">
                   </div>


                </div>

          <!-- -------------------------  No Of Raodas ------------------ -->
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*No Of Roads:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">                
                     <input id="roads" type="text" class="form-control" placeholder="Enter No Of Roads" name="No-Roads">
                   </div>
                </div>
                 
          <!-- ---------------------------  Ploat Frontage --------------  -->
                <div class="form-group row">

                   <div class="col-sm-3">
                     <label id="frontage-label" class="control-label" for="email">*Plot Frontage:</label>
                   </div>
                 
                  <div class="input-group col-sm-9">
                  <input type="text" class="form-control" id="frontage-1" placeholder="Frontage 1" name="frontage-1">
                  <input type="text" class="form-control" id="frontage-2" placeholder="Frontage 2" name="frontage-2">
                  <input type="text" class="form-control" id="frontage-3" placeholder="Frontage 3" name="frontage-3">
                  <input type="text" class="form-control" id="frontage-4" placeholder="Frontage 4" name="frontage-4">
                  </div>

                </div>

          <!-- ---------------- Tentative Improvement Road Width ------  -->
                <div class="row form-group">
                  <div class="col-sm-3">
                    <label id="Road-label" class="control-label" for="name">*Road Width:</label>
                  </div>
                  
                  <div class="input-group col-sm-9">                
                    <input id="Road-1" type="text" class="form-control" placeholder="Road 1" name="Road-1">
                    <input id="Road-2" type="text" class="form-control" placeholder="Road 2" name="Road-2">
                    <input id="Road-3" type="text" class="form-control" placeholder="Road 3" name="Road-3">
                    <input id="Road-4" type="text" class="form-control" placeholder="Road 4" name="Road-4">
                  </div>
                </div>



                
          <!-- -------------------- Submit Button -------------------  -->
                <button class="btn w-25 submit" name="submit" id="submit" style="background-color:#ff6d00;color:#fff">Submit</button>
            
            </form> <!-- close form -->

		      </div> <!-- close form content div -->
               
      </div> <!-- close row -->


    </div><!--  close container -->
  

  <script>
  //  $("#Demolition") // select the radio by its id
  //   .onchange(function(){ // bind a function to the change event
  //       if( $(this).is(":checked") ){ // check if the radio is checked
  //           var val = $(this).val(); // retrieve the value
            
  //       }
  //   });

  // $("#Demolition").click(function(){
  //       var val = $("input[type='radio']:checked").val();
  //       alert(val);
  //   });


  // $("#Demolition").change(function(){
  //       var val = $("#Demolition:checked").val();
  //       alert(val);
  //   });


  $(document).ready(function(){ 
  $('#demolition').change(function(){ 
    let opt = $('#demolition :selected').val();
  
    if(opt == 1){
                $(".demolition-hide").css("display","block");
            }
            else if(opt == 0){
              $(".demolition-hide").css("display","none");
            }

  });



  $('#layout').change(function(){ 
    let opt = $('#layout :selected').val();
  
    if(opt == "unapproved"){
                $(".layout-hide").css("display","block");
            }
            else if(opt == "approved"){
              $(".layout-hide").css("display","none");
            }  });
});

$("#roads").keyup(function(event) {
  text = $(this).val();
  if(text == 1){
    $("#Road-label").css("display","block");
    $("#Road-1").css("display","block");

    $("#frontage-label").css("display","block");
    $("#frontage-1").css("display","block");
  }
  else{
    $("#Road-label").css("display","none");
    $("#Road-1").css("display","none");

    $("#frontage-label").css("display","none");
    $("#frontage-1").css("display","none");

  }
  
  
  
  
  
  if(text == 2){
    $("#Road-label").css("display","block");
    $("#Road-1").css("display","block");
    $("#Road-2").css("display","block");

    $("#frontage-label").css("display","block");
    $("#frontage-1").css("display","block");
    $("#frontage-2").css("display","block");
  }
  // else if(text != 2){
  //   $("#Road-label").css("display","none");
  //   $("#Road-1").css("display","none");
  //   $("#Road-2").css("display","none");

  //   $("#frontage-label").css("display","none");
  //   $("#frontage-1").css("display","none");
  //   $("#frontage-2").css("display","none");

  // }
  
  
  
  if(text == 3){
    $("#Road-label").css("display","block");
    $("#Road-1").css("display","block");
    $("#Road-2").css("display","block");
    $("#Road-3").css("display","block");


    $("#frontage-label").css("display","block");
    $("#frontage-1").css("display","block");
    $("#frontage-2").css("display","block");
    $("#frontage-3").css("display","block");

  }
  // else{
  //   $("#Road-label").css("display","none");
  //   $("#Road-1").css("display","none");
  //   $("#Road-2").css("display","none");
  //   $("#Road-3").css("display","none");


  //   $("#frontage-label").css("display","none");
  //   $("#frontage-1").css("display","none");
  //   $("#frontage-2").css("display","none");
  //   $("#frontage-3").css("display","none");
  // }
  
  
  
  if(text == 4){
    $("#Road-label").css("display","block");
    $("#Road-1").css("display","block");
    $("#Road-2").css("display","block");
    $("#Road-3").css("display","block");
    $("#Road-4").css("display","block");


    $("#frontage-label").css("display","block");
    $("#frontage-1").css("display","block");
    $("#frontage-2").css("display","block");
    $("#frontage-3").css("display","block");
    $("#frontage-4").css("display","block");
  }
  // else{
  //   $("#Road-label").css("display","none");
  //   $("#Road-1").css("display","none");
  //   $("#Road-2").css("display","none");
  //   $("#Road-3").css("display","none");
  //   $("#Road-4").css("display","none");


  //   $("#frontage-label").css("display","none");
  //   $("#frontage-1").css("display","none");
  //   $("#frontage-2").css("display","none");
  //   $("#frontage-3").css("display","none");
  //   $("#frontage-4").css("display","none");

  // }
  
});

</script>


    </body>
</html>