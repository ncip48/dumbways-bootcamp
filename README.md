# Bootcamp DumbWays Test
## Soal No. 1
Buatlah function untuk menghitung jumlah jabat tangan yang terjadi dalam pertemuan yang dihadiri oleh beberapa orang. Jika setiap orang berjabat tangan dengan semua yang hadir dan hanya sekali berjabat tangan tangan dengan orang yang sama!
> * Bahasa yang saya gunakan JavaScript
> * Cara menjalankan dengan online compiler https://es6console.com/

	function count_handshake(number){
		var hasil = 0;
		for(var i=0; i<number; i++){
			hasil = hasil + i;
		}
		return hasil;
	}
	console.log(count_handshake(6))

## Soal No. 2
Cita Citata bercita-cita mempunyai sebuah produk software Dangdut. Cita Citata ingin setiap softwarenya mempunyai serial number dengan format sebagai berikut: xxxx-xxxx-xxxx-xxxx, contoh: bu6e-wdts-7fo4-8ipx. Buatkan function untuk meng-generate serial number yang dibutuhkan oleh Cita Citata, 
> * Bahasa yang saya gunakan JavaScript
> * Cara menjalankan dengan online compiler https://es6console.com/

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

## Soal No. 3
Di sebuah function memiliki sebuah parameter berupa array yang berisi array yang berisi abjad, yang mempunyai tugas untuk mengurutkan array terpendek ke terpanjang, dan juga mengurutkan abjad di dalamnya dari a ke z. Dilarang menggunakan built in function array_multisort
> * Bahasa yang saya gunakan JavaScript
> * Cara menjalankan dengan online compiler https://es6console.com/

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

## Soal No. 4
### 4.A

hasil ada di [4.txt](https://github.com/ncip48/dumbways-bootcamp/blob/master/4.txt)
1. Tampilkan seluruh data dari table video beserta category
2. Tampilkan seluruh data video berdasarkan category tertentu
3. Tampilkan spesifik data video dengan Category
4. SS hasil query POST / menambah data.

#### 4.A.1

query dan result query tabel category

![ss3](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/3.png)

	select * from category_id
result : 

![ss4](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/4.png)

query dan result query tabel video

![ss1](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/1.png)

	select * from video_id
result : 

![ss2](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/2.png)

### 4.A.2

query dan result data video berdasarkan category tertentu

> category musik

	select * from video_tb a JOIN category_tb b ON a.category_id=b.id WHERE a.category=1
	
> result:

> ![ss5](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/5.png)

> category komedi

	select * from video_tb a JOIN category_tb b ON a.category_id=b.id WHERE a.category=2
	
> result:

> ![ss6](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/6.png)

> category horror

	select * from video_tb a JOIN category_tb b ON a.category_id=b.id WHERE a.category=3
	
> result:

> ![ss7](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/7.png)

### 4.A.3

query dan result spesifik data video dengan category

	select a.*,b.name FROM video_tb a JOIN category_tb b ON a.category_id=b.id
	
result:

> ![ss8](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/8.png)

### 4.A.4

> insert ke tabel category

	insert into category_tb (name) VALUES("Musik")
	
> result:

> ![ss10](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/10.png)

> insert ke tabel video

	insert into video_tb (title,category_id,attache,thumbnail) VALUES("Ditinggal Rabi","1","vid1.mp4","vid1.jpg")
	
> result:

> ![ss12](https://github.com/ncip48/dumbways-bootcamp/blob/master/ss/12.png)

## 4.B

hasil 4.B ada di direktori [result_4b](https://github.com/ncip48/dumbways-bootcamp/blob/master/result_4b)
