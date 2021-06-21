var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;



slider1.oninput = function() {
  output1.innerHTML = this.value;
}
slider2.oninput = function() {
  output2.innerHTML = this.value;
}
slider3.oninput = function() {
  output3.innerHTML = this.value;
}
slider4.oninput = function() {
  output4.innerHTML = this.value;
}
slider5.oninput = function() {
  output5.innerHTML = this.value;
}
slider6.oninput = function() {
  output6.innerHTML = this.value;
}

