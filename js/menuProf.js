function check(input) {
        //var matr = document.getElementById("#matriculaProf");
          //var valor = input;


        if (input.value < 1) {
          
          console.log(input);
          input.setCustomValidity("Matricula deve ser maior que zero 0!");
        
          input.classList.add("erro");    
          
        } else {
          // input is valid -- reset the error message
          input.setCustomValidity('');
          input.classList.remove("erro");
          console.log(input);

        }
      }

function checkEmail(input){
  var email = document.getElementById('emailProf').value;

  console.log(email);
  if(input.value!= email){

      
      input.setCustomValidity("Confirmação não corresponde ao e-mail!");
      input.classList.add("erro");
      console.log(input);
  }else{
      input.setCustomValidity('');
      input.classList.remove("erro");
      console.log(input);
  }

}


function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
