/**
  * Permite recargar una imagen seleccionada en un input file
  * @param input   : input de la imagen
  * @param imgName : imagen que se remplaza por la nueva
  */
function readURL(input,imgName) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#'+imgName)
        .attr('src', e.target.result)
        .width(130)
        .height(130);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function numberSeparator(input,caracter)
{
campo='decimales';
var decimales = false;
dec = new Number(campo.value)

pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = input.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true)
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	input.value =valor
	crtr = false
	}
else
	{
	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " " || valor.charAt(m) == ",")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}

		}
	}

if(decimales == true) {
	ctdd = eval(1 + dec);
	nmrs = 1
	}
else {
	ctdd = 1; nmrs = 3
	}

var cad1="",cad2="",cad3="",tres=0
if(largo > nmrs && crtr == true)
	{
	for (k=nums.length-ctdd;k>=0;k--){
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0){
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}

	for (dd = dec; dd > 0; dd--)
	{cad3 += nums[nums.length-dd] }
	if(decimales == true)
	{cad2 += "," + cad3}
	 input.value =cad2
	}
input.focus()
}
