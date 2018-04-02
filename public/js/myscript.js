function testinfile(){
    alert("test in file");
    var Song = Backbone.Model.extend({
        initialize:function(){
            console.log("New song has been created");
        }
    });
    var song = new Song();
}
function proberenpost(){
    var hetobject = {};
    hetobject.hand = 'hoi';
    var hetobject2 = JSON.stringify(hetobject);
    var antwoord = dopost('http://localhost:8000/testpost', hetobject2);
}
function proberen(){
    var antwoord = doget('http://localhost:8000');
}
function proberenCallback(antwoord){
    document.getElementById('antwoord').innerHTML = antwoord;
//    $('div').hide(400);
}
function doget(url){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200){
            proberenCallback(this.responseText);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
function dopost(url, tosend){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200){
            proberenCallback(this.responseText);
        }
    };
    xhttp.open("POST", url, true);
    xhttp.send(tosend);
}
