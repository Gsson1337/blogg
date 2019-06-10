if(document.getElementById('PostButton') !== null){
  document.getElementById('PostButton').addEventListener("click", function(){

  document.getElementById('newpost').style.visibility = "visible";

  });
}else{
  document.getElementById('loginButton').addEventListener("click", function(){

  document.getElementById('login').style.visibility = "visible";

  });
}


document.getElementById('submitlogin').addEventListener("click", function(){

  $.get( "login2.php", { username:$("#username").val(), password:$("#password").val()},
    function( data ) {
      console.log( data);
      console.log( data.login);

      if(data.login == true){
        document.getElementById('login').style.visibility = "hidden";

      }else{
          console.log("funkar inte");
      }
    },"json");

});
document.getElementById('submitpost').addEventListener("click", function(){

  $.get( "newpost.php", { rubrik:$("#rubrik").val()},
    function( data ) {
      console.log(data.post);
      if(data.post == true){
        document.getElementById('newpost').style.visibility = "hidden";

      }else{
          console.log("funkar inte");
      }
    },"json");

});