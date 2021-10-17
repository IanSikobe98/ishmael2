  function fetchitcal(id){
// var fired_button = $("button").val();

var fired_button = id ;

// alert(fired_button);
console.log(fired_button);
  




$.ajax
  ({
    type: "GET",
   beforeSend: function (xhr) {
    var jwt ="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUSEVfSVNTVUVSIiwiYXVkIjoiVEhFX0FVRElFTkNFIiwiaWF0IjoxNjE4NDg5MjYxLCJkYXRhIjp7ImlkIjoiMSIsImZpcnN0bmFtZSI6IklhbiIsImxhc3RuYW1lIjoiSWFuIiwiZW1haWwiOiJpYW53YWx0ZXIzMDlAZ21haWwuY29tIn19.01hYf9zhBVe-pUFdJGs01NW12i8VRFQWd2MJs_cAWTY";
    // console.log("Authorization", "Bearer  " + jwt"");

     
    xhr.setRequestHeader ("Authorization", "Basic "+ jwt);
  }

   ,

    url: "http://localhost/jawert/php-jwt-example/api/protected.php",
    dataType: 'json',
    async: false,
//     headers: {
//   Authorization: "Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUSEVfSVNTVUVSIiwiYXVkIjoiVEhFX0FVRElFTkNFIiwiaWF0IjoxNjE4NDg5MjYxLCJkYXRhIjp7ImlkIjoiMSIsImZpcnN0bmFtZSI6IklhbiIsImxhc3RuYW1lIjoiSWFuIiwiZW1haWwiOiJpYW53YWx0ZXIzMDlAZ21haWwuY29tIn19.01hYf9zhBVe-pUFdJGs01NW12i8VRFQWd2MJs_cAWTY"
// },



    success: function (data){
    // alert('Thanks for your comment!');
    console.log(data);
    console.log("DONE");
    }
});

}

var var1 = setInterval(greet, 20000);  
function greet(){
  console.log('Howdy!');
   console.log(value);
  // setTimeout(greet, 10000);
}
setTimeout(puta, 2000);

function puta(){
  window.value=100;
  // console.log();
}

var ian = "puta";

function nextet(){
window.location.href= ("http://localhost/jawert/php-jwt-example/api/marv2.php")
}