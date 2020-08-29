function count_handshake(number){
  var hasil = 0;
  for(var i=0; i<number; i++){
    hasil = hasil + i;
  }
  return hasil;
}

console.log(count_handshake(6))
