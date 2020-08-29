function print_random_char() {
	var karakter = "1234567890abcdefghijklmnopqrstuvwxyz";
  var index = Math.floor(Math.random() * karakter.length);
	return karakter[index];
}
function print_serial(){
	var serial_number = "";
  var format = "xxxx-xxxx-xxxx-xxxx";
		for(var i=0; i < format.length; i++){
			var identify = format[i];
			serial_number += identify == "x" ? print_random_char() : identify;
		}
	return serial_number;
}
function generate(number){
  var generate = "";
  for(var i=1; i<=number; i++){
    generate += print_serial() + "\n";
  }
  return generate;
}
console.log(generate(3));
