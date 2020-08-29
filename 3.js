function sort_array(array){
  for(var i = 0; i < array.length; i++){
    array[i].sort(function(a, b){
      if(a > b){ 
        return 1;
      }else if(a < b){ 
        return -1; 
      }else{ 
        return 0; 
      }
    });
  }
  return array.sort(function(a, b){return a.length - b.length});
};

var data = [
  ['a','c','b','e','d'],
  ['g','e','f']
];
var datalain = [
  ['g','h','i','j'],
  ['a','c','b','e','d'],
  ['g','e','f']
];

console.log(sort_array(data));
console.log(sort_array(datalain));
