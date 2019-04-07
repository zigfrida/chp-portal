

function scrivi(){

    google.script.run.withSuccessHandler(function(response){
        console.log(response);
    }).withFailureHandler(function(err){
        console.log(err);
    }).checkConnectionWithBrowser();
  
  }
  