var script = document.createElement('script');
script.src = "{https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js}";
document.getElementsByTagName('head')[0].appendChild(script); 
$.getJSON('http://localhost/ishfinal/API/recta.php', function(data)  {
	  			console.log(data);
	  			var items = [];

	  			for(var i in data) {
	  				items.push(data[i].rrule);
		              }
console.log(items);

var dates=[];

var titles=[];
var tid =[];
var status = [];
var prior = [];




for (var i in items){
const rule = rrule.rrulestr(items[i])

dates.push(rule.all());
// dates.push(data[i].title)
titles.push(data[i].title);
tid.push(data[i].tno);
status.push(data[i].status);
prior.push(data[i].Priority);


}
var cars =[dates,titles,tid,status,prior];
console.log(cars);
console.log(dates);
console.log(cars[0][1][0]);
console.log(cars[1][1]);
console.log("hi");

// for(var i = 0; i < cars.length; i++) {
var car = cars[0];
var student = ''; 
var p=0;

var current = new Date();
current = current.toLocaleDateString()
console.log(current);



for(var j = 0; j < car.length; j++) {
    var cube = car[j];
    for(var k = 0; k < cube.length; k++) {
if(current ==  dates[j][k].toLocaleDateString() ){
      
       console.log("cube[" + j + "][" + k + "] = " + dates[j][k].toLocaleDateString());
       console.log("cube[" + j + "][" + k + "] = " + cars[1][j]);

       console.log(" ");
       console.log(" ");
                            student += '<tr>'; 
                            student += '<td>' +  
                                cars[2][j] + '</td>'; 
                            
                            student += '<td>' +  
                                cars[1][j] + '</td>'; 

                                student += '<td>' +  
                                cars[4][j] + '</td>'; 

                                student += '<td>' +  
                                cars[3][j] + '</td>'; 

  
                            // student += '<td>' +  
                            //    dates[j][k].toLocaleDateString() + '</td>'; 

                            student += '<td>' +  
                                '<button id= "btn'+p+'" onclick="myFunction(this.id)"  name='+ cars[2][j]+' value= '+ cars[2][j]+'>'+'edit'+'</button>' + '</td>';

                            student += '</tr>'; 


                          }
else{
  console.log("no dates");
}


p++;
    }
}
  $('#table').append(student); 

// onclick="myFunction()"

// }
// const rule = rrule.rrulestr(
//   "DTSTART:20210104\nFREQ=DAILY;INTERVAL=1;UNTIL=20210303\nEXDATE:20210203"
//   // "DTSTART;TZID=America/Denver:20181101T190000;\n"
//   // + "RRULE:FREQ=WEEKLY;BYDAY=MO,WE,TH;INTERVAL=1;COUNT=3"
// )
// console.log(rule.all());

		  // var str = ""
		  // for (var item of items) {
		  //   str += "<option>" + item + "</option>"
		  // }
		  // document.getElementById("policyid").innerHTML = str;
	  		
			

	    });